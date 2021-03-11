<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('Category.create_category');
    }
    public function store(Request $request){
        $request->validate([
            'name' =>'required|unique:categories,category_name'
        ]);
        
        $data = new Category;
        $data->category_name = $request->name;
        $data->save();
        return redirect()->back()->with('success','Category Add Successfully');

    }
    public function index(){
        $all_category = Category::all();
        return view('Category.index_category',compact('all_category'));
    }
    public function destroy($id){
        $category = Category::findorfail($id);
        $category->delete();
        return redirect()->back();
    }
    public function edit($id){
        $category = Category::findorfail($id);
        return view('Category.edit_category',compact('category'));
    }
    public function update(request $request){

        $request->validate([
            'name'=>'required'
        ]);
        $data = Category::findorfail($request->id);
        $data->category_name = $request->name;
        $data->save();
        return redirect()->route('category.index');
    
    }
}
