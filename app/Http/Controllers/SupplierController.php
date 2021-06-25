<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use DB;

class SupplierController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //create supplier
    public function create(){
        return view('Supplier.create_supplier');
    }
    //store supplier
    public function store(Request $request){

        
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:customers,email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'account_number' => 'required',
            'account_holder' => 'required',
            'bank_name' => 'required',
            'branch_name' => 'required',
            'photo' => 'image'

        ]);

        $supplier = new Supplier;

        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->type = $request->type;
        $supplier->shop = $request->shop;
        $supplier->account_holder = $request->account_holder;
        $supplier->account_number = $request->account_number;
        $supplier->bank_name = $request->bank_name;
        $supplier->branch_name = $request->branch_name;
        $supplier->city = $request->city;
        //photo store
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_name = date("Ymdhis") . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('Public/Image/Supplier/Photo') , $photo_name);
        }

        $supplier->photo = $photo_name;

        $supplier->save();
        return redirect()->route('home');
    }
//show all supplier
public function index(){
    $suppliers = Supplier::all();
    return view('Supplier.index_supplier',compact('suppliers'));
}
//show single supplier
public function show($supplier_id){
    $supplier = Supplier::findorfail($supplier_id);
    return view('Supplier.show_supplier',compact('supplier'));
}
//edit single supplier
public function edit($supplier_id){
    $supplier = Supplier::findorfail($supplier_id);
    return view('Supplier.edit_supplier',compact('supplier'));
}
//update single supplier
public function update(Request $request ){

    // dd($request);
        
    $request->validate([
        'name' => 'required',
        'email' => 'email|required',
        'phone' => 'required|numeric',
        'address' => 'required',
        'shop' => 'required',
        'account_number' => 'required',
        'account_holder' => 'required',
        'bank_name' => 'required',
        'branch_name' => 'required',
        'type' => 'required',
        'city' => 'required'

    ]);

    $id = $request->id;

    $supplier = Supplier::findorfail($id);
    $supplier->name = $request->name;
    $supplier->email = $request->email;
    $supplier->phone = $request->phone;
    $supplier->address = $request->address;
    $supplier->type = $request->type;
    $supplier->shop = $request->shop;
    $supplier->account_holder = $request->account_holder;
    $supplier->account_number = $request->account_number;
    $supplier->bank_name = $request->bank_name;
    $supplier->branch_name = $request->branch_name;
    $supplier->city = $request->city;
    //photo update
    if ($request->hasFile('photo')) {

        $m = DB::table('suppliers')->where('id', $id)->first();
        $old_imge = $m->photo;
        if(file_exists($old_imge)){
            unlink(public_path('Public/Image/supplier/Photo').'/'.$supplier->photo);
        }

        $photo = $request->file('photo');
        $photo_name = date("Ymdhis") . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('public/Image/Supplier/Photo') , $photo_name);
        $supplier->photo = $photo_name;

    }else{
            $m = DB::table('suppliers')->where('id', $supplier_id)->first();
            $old_imge = $m->photo;
            $supplier->photo = $old_imge;

        }

    $supplier->save();
    
    return redirect()->route('supplier.index');

}
// delete employee
public function destroy($supplier_id){
    $supplier = Supplier::findorfail($supplier_id);
    $supplier->delete();
    return redirect()->back();  
}
}
