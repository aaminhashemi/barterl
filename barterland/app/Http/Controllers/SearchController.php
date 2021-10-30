<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItemDetail;
class SearchController extends Controller
{
    //SEARCH A SPECIFIC ADV by $name
    public function searchAdv(Request $request)
    {
        $sortable_fields=['cat_id','city_id','uni_id'];
        $array=[];
        foreach($sortable_fields as $item){
            if($request->$item){
                $array[$item]=$request->$item;
            }
        }
        $request->validate([
            'item_name' => 'required|string|min:1|max:255',
        ],
        [
            'item_name.required' => 'واژه ی موردنظر خود را وارد کنید!',
        ]);
        
        //if name field is not empty
        if (!empty($request->item_name)){
            $results = DB::table('itemdetails')
                ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
                ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
                ->select('itemdetails.name as itemname',
                    'itemdetails.img',
                    'itemdetails.id as itemid',
                    'cities.name as cname',
                    'universities.name as uname')
                ->where('itemdetails.name','LIKE',"%{$request->get('item_name')}%")->where($array)
                ->get();

            //if results is not empty and have value from database
            if($results->isNotEmpty()){
                return view('products.results')->with('results', $results);
            } elseif($results->isEmpty()){
                return view('products.nullresults');
            }
        }
    }

    //Display Ads from a Specific City -> nav bar drop down 
    public function chooseLocation($id, $name)
    {
        $results = DB::table('itemdetails')
            ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
            ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
            ->select('itemdetails.name as itemname',
                'itemdetails.img',
                'itemdetails.id as itemid',
                'cities.name as cname',
                'universities.name as uname')
            ->where('itemdetails.city_id','=', $id)
            ->paginate(12);

        //if results is not empty and have value from database
        if($results->isNotEmpty()){
            return view('products.dropdowns_results')->with('results', $results);
        } elseif($results->isEmpty()){
            return view('products.dropdowns_nullresults');
        }
    }

    //Display Ads from a Specific University -> nav bar drop down
    public function chooseUni($id, $name)
    {
        $results = DB::table('itemdetails')
            ->join('cities', 'itemdetails.city_id', '=', 'cities.id')
            ->join('universities', 'itemdetails.uni_id', '=', 'universities.id')
            ->select('itemdetails.name as itemname',
                'itemdetails.img',
                'itemdetails.id as itemid',
                'cities.name as cname',
                'universities.name as uname')
            ->where('itemdetails.uni_id','=', $id)
            ->paginate(12);

        //if results is not empty and have value from database
        if($results->isNotEmpty()){
            return view('products.dropdowns_results')->with('results', $results);
        } elseif($results->isEmpty()){
            return view('products.dropdowns_nullresults');
        }
    }
}