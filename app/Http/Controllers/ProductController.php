<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('Product.create_product');
    }
    public function store(Request $request){
        $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'product_code' => 'required',
            'product_garage' => 'required',
            'product_route' => 'required',
            'buy_date' => 'required',
            'expire_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
        ]);

        $data = new Product;
        $data->product_name = $request->product_name;
        $data->category_id = $request->category_id;
        $data->supplier_id = $request->supplier_id;
        $data->product_code = $request->product_code;
        $data->product_garage = $request->product_garage;
        $data->product_route = $request->product_route;
        $data->buy_date = $request->buy_date;
        $data->expire_date = $request->expire_date;
        $data->buying_price = $request->buying_price;
        $data->selling_price = $request->selling_price;
        //photo store
        $extension = $request->Product_image->extension();
        $photo_name = $data->product_name.".".$extension;
        $request->Product_image->storeAs('product', $photo_name);
        $data->Product_image = $photo_name;

        $data->save();
        return redirect()->back()->with('success','Product Add Successful');
    }
    public function index(){
        $product = Product::all();
        return view('Product.index_product',compact('product'));
    }
    public function show($id){
        $product = Product::findorfail($id);
        return view('Product.show_product',compact('product'));
    }
    public function destroy($id){
        $product = Product::findorfail($id);
        $product->delete();
        return redirect()->back()->with('delete','Product Delete Success');

    }
    public function edit($id){
        $product = Product::findorfail($id);
        return view('Product.edit_product',compact('product'));
    }
    public function update(Request $request){
        
        $request->validate([
            'product_name' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'product_code' => 'required',
            'product_garage' => 'required',
            'product_route' => 'required',
            'buy_date' => 'required',
            'expire_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
        ]);
            
        $data = Product::findorfail($request->id);

        $data->product_name = $request->product_name;
        $data->category_id = $request->category_id;
        $data->supplier_id = $request->supplier_id;
        $data->product_code = $request->product_code;
        $data->product_garage = $request->product_garage;
        $data->product_route = $request->product_route;
        $data->buy_date = $request->buy_date;
        $data->expire_date = $request->expire_date;
        $data->buying_price = $request->buying_price;
        $data->selling_price = $request->selling_price;

        $data->save();
        return redirect()->route('product.index')->with('Update','Product Update Successful');

    }
}
