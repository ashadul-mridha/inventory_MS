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
                    <div class="panel-heading"><h3 class="panel-title">Customer Details</h3></div>
                    <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Customer Name</label>
                                <p> {{ $customer->name }} </p>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <p> {{ $customer->email }} </p>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <p> {{ $customer->phone }} </p>
                            </div>
                            <div class="form-group">
                                <label for=address">Address</label>
                                <p> {{ $customer->address }} </p>
                            </div>
                            <div class="form-group">
                                <label for="exprience">Shop Name</label>
                                <p> {{ $customer->shopname }} </p>
                            </div>
                            <div class="form-group">
                                <label for="salary">Account Holder</label>
                                <p> {{ $customer->account_holder }} </p>
                            </div>
                            <div class="form-group">
                                <label for="vacation">Account Number</label>
                                <p> {{ $customer->account_number }} </p>
                            </div>
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <p> {{ $customer->bank_name }} </p>
                            </div>
                            <div class="form-group">
                                <label for="bank_branch">Bank Branch</label>
                                <p> {{ $customer->bank_branch }} </p>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <p> {{ $customer->city }} </p>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <img src="{{asset('public/Image/Customer/Photo')}}/{{ $customer->photo }}" alt="Customer Image" width="500" height="400">
                            </div>

                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection