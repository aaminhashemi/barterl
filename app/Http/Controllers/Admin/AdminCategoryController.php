<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller{
    public function categories(){
        $categories=Category::all();
        
        return view('admin.Category.index',compact('categories'));
    }
    public function edit(Category $category){
        return view('admin.Category.edit',compact('category'));
    }
    
    public function update(Category $category,Request $request){
        $request->validate([
            'name'=> 'required|string|min:3|max:50'
        ]);
        $category->update([
            'name'=>$request->name,
        ]);
        $categories=Category::all();

        return redirect(route('categories'));
    }

    public function save(Request $request){
        $request->validate([
            'name'=> 'required|string|min:3|max:50'
        ]);

        Category::create([
            'name'=>$request->name
        ]);
        return back();
    }
}