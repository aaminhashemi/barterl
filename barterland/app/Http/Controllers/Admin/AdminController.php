<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller{

    public function index(){
        $type=$this->checkAdmin();
        if($type!='admin'){
            return redirect(route('dashboard'));
        }
        if(auth()->check()){
            return view('admin.layouts.master');

        }else{
            return redirect(route('login'));
        }
    }


}
