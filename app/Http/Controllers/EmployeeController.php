<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //create employee
    public function create(){
        return view('Employee.create_employee');
    }
    //store employee
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:employees,email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'salary' => 'required|numeric',
            'city' => 'required',
            'nid_no' => 'required|numeric|unique:employees,nid_no',
            'photo' => 'image'

        ]);

        $employee = new Employee;

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->exprience = $request->exprience;
        $employee->salary = $request->salary;
        $employee->vacation = $request->vacation;
        $employee->city = $request->city;
        $employee->nid_no = $request->nid_no;
        //photo store
        // $extension = $request->photo->extension();
        // $photo_name = $employee->name.".".$extension;
        // $request->photo->storeAs('employee', $photo_name);
        // $employee->photo = $photo_name;

        $employee->save();
        return redirect()->route('employees.index');
    }
    //show all employee
    public function index(){
        $employees = Employee::all();
        return view('Employee.index_employee',compact('employees'));
    }
    //show single employee
    public function show($employee_id){
        $employee = Employee::findorfail($employee_id);
        return view('Employee.show_employee',compact('employee'));
    }
    // delete employee
    public function destroy($employee_id){
        $employee = Employee::findorfail($employee_id);
        $employee->delete();
        return redirect()->back();  
    }
    //edit single employee
    public function edit($employee_id){
        $employee = Employee::findorfail($employee_id);
        return view('Employee.edit_employee',compact('employee'));
    }
    //update single employee
    public function update(\App\Models\Employee   $employee_id){
        
        //Employee::findorfail($employee_id);

        $data= request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'salary' => 'required|numeric',
            'city' => 'required',
            'nid_no' => 'required|numeric',

        ]);

        $employee_id->update($data);

        // $employee = new Employee;

        // $employee->name = $request->name;
        // $employee->email = $request->email;
        // $employee->phone = $request->phone;
        // $employee->address = $request->address;
        // $employee->exprience = $request->exprience;
        // $employee->salary = $request->salary;
        // $employee->vacation = $request->vacation;
        // $employee->city = $request->city;
        // $employee->nid_no = $request->nid_no;
        // //photo store
        // $extension = $request->photo->extension();
        // $photo_name = $employee->name.".".$extension;
        // $request->photo->storeAs('employee', $photo_name);
        // $employee->photo = $photo_name;

        // $employee->save();
        return redirect()->route('employees.index');

    }
}
