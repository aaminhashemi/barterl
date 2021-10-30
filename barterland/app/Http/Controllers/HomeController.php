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

        $items = ItemDetail::where('user_id', $userid)->orderBy('created_at', 'desc')
            ->paginate(8);
        $user = User::where('id', $userid)->first();
        return view('home', compact('user'))->with('items', $items);
    }

    public function displayMyAdvDetails($id, $name, Request $request)
    {
        $itemdetail = ItemDetail::where('id', $request->id)->first();
        $album = ItemDetail::where('id', $request->id)->pluck('img'); // showing in carousel at myadv_details.blade.php
        $orderable_items = ItemDetail::where('name', 'LIKE', "%" . $itemdetail->exchangedesc . "%")->get();
        return view(('products.myadv_details'), compact('itemdetail', 'album', 'name', 'orderable_items'));
    }

    public function edit($id)
    {
        $item = DB::table('itemdetails')->where('id', $id)->first();
        return view('products.edit')->with('item', $item);
    }

    public function update(Request $request, $id)
    {

        $request->validate(
            [
                'adv_name' => 'required|string|min:5|max:255',
                'description' => 'required|string|min:5|max:255',
                'contactway' => 'required|string|min:5|max:255',
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
                'exchangedesc.max' => 'توضیحات کالای مورد معاوضه نمی تواند بیشتر از 255 کاراکتر باشد.',

                'category.required' => 'دسته بندی آگهی را انتخاب کنید.',
                'university.required' => 'دانشگاه محل تحصیل را انتخاب کنید.',
                'city.required' => 'شهر را انتخاب کنید.',

                'images.required' => 'تصویر آگهی را آپلود کنید.',
                //'images.image' => 'فایل آپلود شده باید تصویر باشد!(فرمت های قابل قبول PNG, JPEG)',
                'images.*.mimes' => 'فایل آپلود شده باید تصویر باشد!(فرمت های قابل قبول PNG, JPEG, JPG)',
            ]
        );
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $img) {
                $imgName = time() . '-' . rand(1, 1000) . '.' .
                    $img->extension();
                $img->move(public_path('images'), $imgName);
                $imgData[] = $imgName;
            }
            $new = json_encode($imgData);

            ItemDetail::where('id', '=', $id)
                ->update([
                    'name' => $request->input('adv_name'),
                    'description' => $request->input('description'),
                    'contactway' => $request->input('contactway'),
                    'exchangedesc' => $request->input('exchangedesc'),
                    'cat_id' => $request->input('category'),
                    'uni_id' => $request->input('university'),
                    'city_id' => $request->input('city'),
                    'img' => $new
                ]);
            return redirect(route('dashboard'))
                ->with('status', $request->input('adv_name') . ' با موفقیت ویرایش شد ');
        }
    }

    public function delete($item_id)
    {
        $item = DB::table('itemdetails')->where('id', $item_id)->first();
        ItemDetail::where('id', $item_id)->delete();

        return redirect(route('dashboard'))
            ->with('status', $item->name . ' حذف شد ');
    }
}
