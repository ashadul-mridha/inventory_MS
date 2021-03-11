<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use DB;

class SalaryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('salary.Add_advanced_salary');
    }

    public function store(Request $request){

        $month = $request->month;
        $emp_id = $request->name;


        $advanced = DB::table('salaries')
                    ->where('month',$month)
                    ->where('emp_id',$emp_id)
                    ->first();

        if ($advanced === NULL ) {
            $request->validate([
                'name' => 'required',
                'month' => 'required',
                'Year' => 'required|numeric',
                'salary' => 'required|numeric'
            ]);
    
            $salary = new Salary;
            $salary->emp_id = $request->name;
            $salary->month = $request->month;
            $salary->year = $request->Year;
            $salary->advanced_salary = $request->salary;
            $salary->save();
    
            return redirect()->back()->with('success', 'Advanced Pay Successfull');
        }else {
            return redirect()->back()->with('error', 'Allready Advanced Pay In This Month');

        }
        

    }

    public function index(){
        $salary = DB::table('salaries')
                ->join('employees','salaries.emp_id','employees.id')
                ->select('salaries.*','employees.name','employees.salary','employees.photo')
                ->orderBy('id','DESC')
                ->get();
        return view('salary.All_advanced_salary',compact('salary'));
    }
    public function paysalary(){
        $employee = DB::table('employees')->get();
        return view('salary.pay_salary',compact('employee'));
    }
}
