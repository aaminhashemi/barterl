<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItemDetail;
use App\Models\User;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //Show Ads By Authentication With user_id In Dashboard
    public function userPanel()
    {
        $userid = Auth::id();
        //Query Builder
        //$my_birthday->diffForHumans();
        $items = DB::table('itemdetails')
            ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
            ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
            ->select('itemdetails.name as adv_name',
                'itemdetails.img as img',
                'itemdetails.photo as photo',
                'itemdetails.id as item_id',
                'itemdetails.user_id as user_id',
                'cities.name as city_name',
                'universities.name as uni_name')
            ->where('itemdetails.user_id', '=', $userid)
            ->orderBy('itemdetails.created_at','desc')
            ->paginate(8);
            //$datetime = $items->created;

        // لحظاتی پیش، 5 ساعت پیش و ..
        $datetime = DB::table('itemdetails')
            ->select('created_at as created_at')
            ->where('itemdetails.user_id', '=', $userid)->get();
        foreach ($datetime as $item) {
            Carbon::setLocale('fa');
            $date = Carbon::parse($item->created_at)->diffForHumans();
            //Jalalian::fromCarbon($value)->ago();
            //$date = Jalalian::forge($value)->format('datetime');
            //$result = Carbon::createFromFormat('m/d/Y', $value)->diffForHumans();
        }
        //$items->push($datetime);
        //$items->push($date);
        //dd($items);
        $user=User::where('id',$userid)->first();
        return view('home',compact('user'))->with('items', $items);
    }

    //Display Advertisment Details By user_id
    public function displayMyAdvDetails($id, $name)
    {
        $itemdetail = DB::select
            ('SELECT it.name as adv_name,
                it.description as adv_description,
                it.contactway as contactway,
                it.exchangedesc as exchangedesc,
                ct.name as city_name,
                un.name as uni_name,
                cat.name as cate_name,
                it.user_id,
                it.img,
                it.id
            FROM itemdetails it
            INNER JOIN cities ct 
                ON it.city_id = ct.id
            INNER JOIN universities un 
                ON it.uni_id = un.id
            INNER JOIN categories cat 
                ON it.cat_id = cat.id
            WHERE it.id = :id
            ORDER BY it.created_at desc', ["id" => $id]);

        $album = DB::table('itemdetails')
            ->where('itemdetails.id', '=', $id)
            ->pluck('img'); // showing in carousel at myadv_details.blade.php
        //dd($album);
        return view('products.myadv_details')
            ->with(['itemdetail' => $itemdetail, 'name' => $name, 'album' => $album]);
    }

    //Show The Form For Editing a Specific Adv
    public function edit($id)
    {
        $item = DB::table('itemdetails')->where('id', $id)->first();
        return view('products.edit')->with('item', $item);
    }

    //Update The Specific Adv in Database
    public function update(Request $request, $id)
    {
        /* It saves multiple images with image formates
        but Doesn't show any error when the formates are invalid
        */
        $request->validate([
            'adv_name' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5|max:255',
            'contactway'=> 'required|string|min:5|max:255',
            'exchangedesc' => 'required|string|min:5|max:255|',
            'category' => 'required',
            'university' => 'required',
            'city' => 'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg'
        ],
        [
            'adv_name.required' => 'عنوان آگهی را وارد کنید.',
            'adv_name.min' => 'عنوان نمی تواند کم تر از 5 کاراکتر باشد.',
            'adv_name.max' => 'عنوان نمی تواند بیشتر از 255 کاراکتر باشد.',

            'description.required' => 'توضیحات آگهی را وارد کنید.',
            'description.min' => 'توضیحات آگهی نمی تواند کم تر از 5 کاراکتر باشد.',
            'description.max' => 'توضیحات آگهی نمی تواند بیشتر از 255 کاراکتر باشد.',

            'contactway.required' => 'راه ارتباطی با خود را وارد کنید.',
            'contactway.min' => 'راه ارتباطی نمی تواند کم تر از 5 کاراکتر باشد.',
            'contactway.max' => 'راه ارتباطی نمی تواند بیشتر از 255 کاراکتر باشد.',

            'exchangedesc.required' => 'توضیحات آگهی را وارد کنید.',
            'exchangedesc.min' => 'توضیحات کالای موردمعاوضه نمی تواند کم تر از 5 کاراکتر باشد.',
            'exchangedesc.max' =>'توضیحات کالای مورد معاوضه نمی تواند بیشتر از 255 کاراکتر باشد.',

            'category.required' => 'دسته بندی آگهی را انتخاب کنید.',
            'university.required' => 'دانشگاه محل تحصیل را انتخاب کنید.',
            'city.required' => 'شهر را انتخاب کنید.',

            'images.required' => 'تصویر آگهی را آپلود کنید.',
            //'images.image' => 'فایل آپلود شده باید تصویر باشد!(فرمت های قابل قبول PNG, JPEG)',
            'images.*.mimes' => 'فایل آپلود شده باید تصویر باشد!(فرمت های قابل قبول PNG, JPEG, JPG)',
        ]);
        if($request->hasfile('images')) {
            foreach($request->file('images') as $img)
            {
            $imgName = time() . '-' . rand(1, 1000) . '.' .
                    $img->extension();
            $img->move(public_path('images'), $imgName);
            $imgData[] = $imgName;
            }
            $new = json_encode($imgData);
        /*$newImageName = time() . '-' . $request->id . '_' .$request->adv_name . '.' .
                        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);*/

        ItemDetail::where('id','=',$id)
            ->update([
                'name'=>$request->input('adv_name'),
                'description'=>$request->input('description'),
                'contactway'=>$request->input('contactway'),
                'exchangedesc'=>$request->input('exchangedesc'),
                'cat_id'=> $request->input('category'),
                'uni_id'=> $request->input('university'),
                'city_id'=>$request->input('city'),
                'img'=> $new
            ]);
        return redirect(route('dashboard'))
            ->with('status',$request->input('adv_name') .' با موفقیت ویرایش شد ');
        }
    }

    //Delete The Specific Adv
    public function delete($item_id)
    {
        $item = DB::table('itemdetails')->where('id', $item_id)->first();
        ItemDetail::where('id', $item_id)->delete();

        return redirect(route('dashboard'))
            ->with('status', $item->name . ' حذف شد ');
    }
}
