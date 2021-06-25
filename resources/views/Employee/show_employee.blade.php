@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Employee Details</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="#"> View Details</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <!-- Basic example -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Employee Details</h3></div>
                    <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <p> {{ $employee->name }} </p>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <p> {{ $employee->email }} </p>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <p> {{ $employee->phone }} </p>
                            </div>
                            <div class="form-group">
                                <label for=address">Address</label>
                                <p> {{ $employee->address }} </p>
                            </div>
                            <div class="form-group">
                                <label for="exprience">Exprience</label>
                                <p> {{ $employee->exprience }} </p>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <p> {{ $employee->salary }} </p>
                            </div>
                            <div class="form-group">
                                <label for="vacation">Vacation</label>
                                <p> {{ $employee->vacation }} </p>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <p> {{ $employee->city }} </p>
                            </div>
                            <div class="form-group">
                                <label for="nid_no">Nation ID No</label>
                                <p> {{ $employee->nid_no }} </p>
                            </div>
                            <div class="form-group">
                                <label for="photo">Image</label>
                                <img src="{{asset('public/Image/Employee/Photo')}}/{{ $employee->photo }}" alt="Employee Image" width="500" height="400">
                            </div>

                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection