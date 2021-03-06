@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">{{ date('Y')}} Expensive</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('expense.index') }}">All Expensive</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4 class="text-center text-danger">This Year Total Expense: {{ $year_expense }}</h4>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datatable</h3>
                        <a href="{{ route('expense.create') }}" class="btn btn-primary pull-right"> Add Expense</a>
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