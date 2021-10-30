<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ItemDetail;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminAdvertisementController extends Controller
{
    public function index()
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        $v = new verta();
        $v = Carbon::instance($v->datetime());

        $v->subMonth();
        //dd($v);
        $ads = ItemDetail::where('updated_at', '>=', $v)->get();

        return view('admin.Advertisement.index', compact('ads'));
    }

    public function delete(ItemDetail $itemDetail)
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        $itemDetail->delete();
        return back();
    }

    public function search(Request $request)
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }

        $request->validate([
            'start_date'=>'required',
            'end_date'=>'required',
        ]);
        $start_date = str_replace('/', '-', $request->start_date);
        //dd($date);
        //$start_date = new Carbon($start_date);
        $start_date = \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', $start_date)->toCarbon();
        //dd($date);
        //$verta_start=Verta::getGregorian($start_date['0'],$start_date['1'],$start_date['2']);
        //dd($verta);
        $end_date = str_replace('/', '-', $request->end_date);
        $end_date = \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', $end_date)->toCarbon();

        $end_date = new Carbon($end_date);
        //   dd($end_date);
        // $v->formatGregorian('Y-m-d H:i:s')
        //dd($date);
        //$verta_end=Verta::getGregorian($end_date['0'],$end_date['1'],$end_date['2']);
        $ads = ItemDetail::where('updated_at', '>=', $start_date)->where('updated_at', '<=', $end_date)->get();
        return view('admin.Advertisement.index', compact('ads'));
    }

    public function show(ItemDetail $itemDetail)
    {
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        return view('admin.advertisement.show',compact('itemDetail'));
    }
}
