<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItemDetail;
use App\Models\Category;
class CategoryController extends Controller
{
    //Display Ads by a specific Category: Book
    public function bookCategory()
    {
        $items = DB::table('itemdetails')
            ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
            ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
            ->join('categories', 'itemdetails.cat_id', '=', 'categories.id')
            ->select('itemdetails.name as adv_name',
                'itemdetails.img as img',
                'itemdetails.id as item_id',
                'cities.name as city_name',
                'universities.name as uni_name')
            ->where('itemdetails.cat_id', '=', '1')
            ->orderBy('itemdetails.created_at','desc')
            ->paginate(12);
        return view('categories.book_category')->with('items', $items);
    }

    //Display Ads by a specific Category: Paper
    public function paperCategory()
    {
        $items = DB::table('itemdetails')
            ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
            ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
            ->join('categories', 'itemdetails.cat_id', '=', 'categories.id')
            ->select('itemdetails.name as adv_name',
                'itemdetails.img',
                'itemdetails.id as item_id',
                'cities.name as city_name',
                'universities.name as uni_name',
                'categories.name as cate_name')
            ->where('itemdetails.cat_id', '=', 2)
            ->orderBy('itemdetails.created_at','desc')
            ->paginate(12);
        return view('categories.paper_category')->with('items', $items);
    }

    //Display Ads by a specific Category: Service
    public function servicesCategory()
    {
        $items = DB::table('itemdetails')
            ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
            ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
            ->join('categories', 'itemdetails.cat_id', '=', 'categories.id')
            ->select('itemdetails.name as adv_name',
                'itemdetails.img',
                'itemdetails.id as item_id',
                'cities.name as city_name',
                'universities.name as uni_name',
                'categories.name as cate_name')
            ->where('itemdetails.cat_id', '=', 3)
            ->orderBy('itemdetails.created_at','desc')
            ->paginate(12);
        return view('categories.service_category')->with('items', $items);
    }
}
