@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">{{ date('F')}} Month Expensive</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('expense.index') }}">All Expensive</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4 class="text-center text-danger">This Month Total Expense: {{ $month_expense }} Taka</h4>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ route('expense.create') }}" class="btn btn-primary pull-right"> Add Expense</a>
                    </div>
                    <div>
                        <a href="{{ route('january.expense') }}" class="btn btn-sm btn-primary">January</a>
                        <a href="{{ route('february.expense') }}" class="btn btn-sm btn-info">February</a>
                        <a href="{{ route('march.expense') }}" class="btn btn-sm btn-warning">March</a>
                        <a href="{{ route('april.expense') }}" class="btn btn-sm btn-dark">April</a>
                        <a href="{{ route('may.expense') }}" class="btn btn-sm btn-danger">May</a>
                        <a href="{{ route('june.expense') }}" class="btn btn-sm btn-success">June</a>
                        <a href="{{ route('july.expense') }}" class="btn btn-sm btn-light">July</a>
                        <a href="{{ route('august.expense') }}" class="btn btn-sm btn-primary">August</a>
                        <a href="{{ route('september.expense') }}" class="btn btn-sm btn-warning">September</a>
                        <a href="{{ route('october.expense') }}" class="btn btn-sm btn-danger">October</a>
                        <a href="{{ route('november.expense') }}" class="btn btn-sm btn-success">November</a>
                        <a href="{{ route('december.expense') }}" class="btn btn-sm btn-info">December</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Details</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                             
                                    <tbody>
                                        @foreach ($expense as $row)
                                            <tr>
                                                <td>{{ $row->details }}</td>
                                                <td>{{ $row->amount }}</td>
                                                <td>
                                                    {{-- <a href="/employees/{{ $employee->id }}/edit" class="btn btn-sm btn-info"> Edit</a>
                                                    <a href="/employee-delete/{{ $employee->id }}" class="btn btn-sm btn-danger"> Delete</a>
                                                    <a href="/employees/{{ $employee->id }}" class="btn btn-sm btn-primary"> View</a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection