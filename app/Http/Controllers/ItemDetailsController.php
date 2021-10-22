<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItemDetail;
use Illuminate\Support\Facades\Validator;
class ItemDetailsController extends Controller
{
    //Show The Form For Inserting New Advertisment
    public function createAdv()
    {
        return view('products.new_adv');
    }

    //Get he Current User id
    public function getId()
    {
        $userid = Auth::id();
        return $userid;
    }

    public function storeAdv(Request $request)
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
            //'images.image' => 'فایل آپلود شده باید عکس باشد.',
            'images.*.mimes' => 'فایل آپلود شده باید تصویر باشد!(فرمت های قابل قبول PNG, JPEG, JPG)',
        ]);
        if($request->hasfile('images')) {
            foreach($request->file('images') as $img)
            {
            $imgName = time() . '-' . rand(1, 1000) . '.' .
                    $img->extension();
            $img->move(public_path('images'), $imgName);
            $imgData[] = $imgName;
            $photo=$imgName;
            }
            $new = json_encode($imgData);

        /*$newImageName = time() . '-' . $request->adv_name . '.' .
                        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);*/

        $item = ItemDetail::create([
            'name' => $request->input('adv_name'),
            'description' => $request->input('description'),
            'contactway' => $request->input('contactway'),
            'exchangedesc' => $request->input('exchangedesc'),
            'cat_id' => $request->input('category'),
            'uni_id' => $request->input('university'),
            'city_id' => $request->input('city'),
            'user_id' => $this->getId(),
            'img' => $new,
            'photo' => $photo,
        ]);
        return redirect(route('dashboard'))
            ->with('status', $request->input('adv_name') . ' با موفقیت ثبت شد ');
        }
    }

    //Display All Ads Card In route: /ads
    public function displayAllAds()
    {
        $items = DB::table('itemdetails')
            ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
            ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
            ->select('itemdetails.name as adv_name',
                'itemdetails.img',
                'itemdetails.photo',
                'itemdetails.id',
                'cities.name as city_name',
                'universities.name as uni_name')
            ->orderBy('itemdetails.created_at','desc')
            ->paginate(20);

        return view('products.all_ads',['items' => $items]);
    }

    //Display All Ads Card In route: /
    public function displayLatestAds()
    {
        $items = DB::select
                ('SELECT it.name as name,
                    it.photo as photo,
                    ct.name as city_name,
                    un.name as uni_name,
                    it.id
                FROM itemdetails it
                INNER JOIN cities ct 
                ON it.city_id = ct.id
                INNER JOIN universities un 
                ON it.uni_id = un.id
                ORDER BY it.created_at desc
                LIMIT 20');
        return view('index',['items' => $items]);
    }

    //Display Advertisment Details
    public function displayAdvDetails($id, $name)
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
            ->pluck('img'); // showing in carousel at adv_details.blade.php
        //dd($album);

        $realeted_products=ItemDetail::where('name','LIKE','%'.$name.'%')->get();

        return view('products.adv_details')
            ->with(['itemdetail' => $itemdetail, 'name' => $name, 'album' => $album, 'realted' => $realeted_products]);
    }

    //Diplay A list of Seggested Ads
    public function SuggestedAds($name)
    {
    }
}


