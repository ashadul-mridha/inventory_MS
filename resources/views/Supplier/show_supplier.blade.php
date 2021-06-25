@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Supplier Details</h4>
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
                    <div class="panel-heading"><h3 class="panel-title">Supplier Details</h3></div>
                    <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Supplier Name</label>
                                <p> {{ $supplier->name }} </p>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <p> {{ $supplier->email }} </p>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <p> {{ $supplier->phone }} </p>
                            </div>
                            <div class="form-group">
                                <label for=address">Address</label>
                                <p> {{ $supplier->address }} </p>
                            </div>
                            <div class="form-group">
                                <label for="exprience">Shop Name</label>
                                <p> {{ $supplier->shopname }} </p>
                            </div>
                            <div class="form-group">
                                <label for="salary">Account Holder</label>
                                <p> {{ $supplier->account_holder }} </p>
                            </div>
                            <div class="form-group">
                                <label for="vacation">Account Number</label>
                                <p> {{ $supplier->account_number }} </p>
                            </div>
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <p> {{ $supplier->bank_name }} </p>
                            </div>
                            <div class="form-group">
                                <label for="bank_branch">Bank Branch</label>
                                <p> {{ $supplier->bank_branch }} </p>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <p> {{ $supplier->city }} </p>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <img src="{{asset('public/Image/Supplier/Photo')}}/{{ $supplier->photo }}" alt="Supplier Image" width="500" height="400">
                            </div>

                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection