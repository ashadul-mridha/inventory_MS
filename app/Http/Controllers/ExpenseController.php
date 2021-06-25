<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('Expense.create_expense');
    }

    public function store(Request $request){

        $request->validate([
            'details' => 'required',
            'amount' => 'numeric|required'
        ]);

        $expense = new Expense;

        $expense->details = $request->details;
        $expense->amount = $request->amount;

        $expense->save();
        return redirect()->route('today.expense');

    }

    public function today(){
        $expense = Expense::whereDate('created_at', '=', date('Y-m-d'))
                            ->get();
        
        $today_expense = Expense::whereDate('created_at', '=', date('Y-m-d'))
                            ->get()
                            ->sum('amount');   

        return view('Expense.today_expense',compact('expense','today_expense'));
    }

    public function todayedit($id){
        $expense = Expense::findorfail($id);

        return view('Expense.today_expense_edit',compact('expense'));

    }

    public function updatetoday(Request $request){

        $request->validate([
            'details' => 'required',
            'amount' => 'numeric|required'
        ]);
        $expense = Expense::findorfail($request->id);

        $expense->details = $request->details;
        $expense->amount = $request->amount;

        $expense->save();
        return redirect()->route('today.expense');
    }

    public function todaydelete($id){
        
        $expense = Expense::findorfail($id);

        $expense->delete();
        return redirect()->route('today.expense');
    }

    public function month(){
        $expense = Expense::whereMonth('created_at', '=', date('m'))
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', date('m'))
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));
    }

    public function year(){
        $expense = Expense::whereYear('created_at', '=', date('Y'))
                            ->get();
        
        $year_expense = Expense::whereYear('created_at', '=', date('Y'))
                            ->get()
                            ->sum('amount');   

        return view('Expense.year_expense',compact('expense','year_expense'));
    }

    //monthly Controller

    public function january(){
        $month = 01;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function february(){
        $month = 02;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function march(){
        $month = 03;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function april(){
        $month = 04;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function may(){
        $month = 05;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function june(){
        $month = 06;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function july(){
        $month = 07;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function august(){
        
        $month = (string) '08';
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function september(){
        $month =(string) '09';
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function october(){
        $month = 10;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function november(){
        $month = 11;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
    public function december(){
        $month = 12;
        $expense = Expense::whereMonth('created_at', '=', $month)
                            ->get();
        
        $month_expense = Expense::whereMonth('created_at', '=', $month)
                            ->get()
                            ->sum('amount');   

        return view('Expense.month_expense',compact('expense','month_expense'));

    }
}
