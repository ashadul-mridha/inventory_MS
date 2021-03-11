<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //create employee
    public function create(){
        return view('Customer.create_customer');
    }
    //store employee
    public function store(Request $request){

        
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:customers,email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'account_number' => 'required',
            'account_holder' => 'required',
            'bank_name' => 'required',
            'bank_branch' => 'required',
            'photo' => 'image'

        ]);

        $customer = new Customer;

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->shopname = $request->shopname;
        $customer->account_holder = $request->account_holder;
        $customer->account_number = $request->account_number;
        $customer->bank_name = $request->bank_name;
        $customer->bank_branch = $request->bank_branch;
        $customer->city = $request->city;
        //photo store
        $extension = $request->photo->extension();
        $photo_name = $customer->name.".".$extension;
        $request->photo->storeAs('customer', $photo_name);
        $customer->photo = $photo_name;

        $customer->save();
        return redirect()->route('home');
    }
    //show all employee
    public function index(){
        $customers = Customer::all();
        return view('Customer.index_customer',compact('customers'));
    }
    //show single employee
    public function show($customer_id){
        $customer = Customer::findorfail($customer_id);
        return view('Customer.show_customer',compact('customer'));
    }
    // delete employee
    public function destroy($customer_id){
        $customer = Customer::findorfail($customer_id);
        $customer->delete();
        return redirect()->back();  
    }
    //edit single employee
    public function edit($customer_id){
        $customer = Customer::findorfail($customer_id);
        return view('Customer.edit_customer',compact('customer'));
    }
    //update single employee
    public function update(\App\Models\Customer   $customer_id ){

        
        
        $data= request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'shopname' => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank_name' => 'required',
            'bank_branch' => 'required'

        ]);

         $customer_id->update($data);
        
        return redirect()->route('customer.index');

    }
}
