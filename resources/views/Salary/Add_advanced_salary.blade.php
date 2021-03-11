@php

use App\Models\Employee;
$employee = Employee::all();

@endphp

@extends('layouts.app')


@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Add Salary</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('supplier.create') }}">Forms</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <!-- Basic example -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-info">
                    {{-- if data insert then message --}}
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    {{-- if data not insert then message --}}
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <div class="panel-heading "><h3 class="panel-title text-white">Advanced Salary Provied</h3></div>
                    <a href="{{ route('salary.index') }}" class="btn btn-primary pull-right"> All Advanced Salary</a>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/insert-advanced_salaries') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">All Employee</label>
                                <select name="name" id="name" class="form-control">
                                    @foreach ($employee as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }} </option>
                                    @endforeach
                                </select>
                                
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="month">Month</label>
                                <select name="month" id="month" class="form-control">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="Noveber">November</option>
                                    <option value="December">December</option>
                                </select>
                                @error('month')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Year">Year</label>
                                <input type="text" value="{{ old('Year') }}" name="Year" class="form-control" id="Year" placeholder="Year">
                                @error('Year')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=salary">Advanced Salary</label>
                                <input type="text" value="{{ old('salary') }}" name="salary" class="form-control" id="salary" placeholder="Enter Advanced Salary">
                                @error('salary')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection