@extends('layouts.app')


@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Edit Supplier</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="#">Forms</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <!-- Basic example -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Update Supplier Details</h3></div>
                    <a href="{{ route('supplier.index') }}" class="btn btn-primary pull-right"> All Supplier</a>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ route('supplier.update') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="hidden" value="{{ $supplier->id }}" name="id" class="form-control" >
                            <div class="form-group">
                                <label for="name">Supplier Name</label>
                                <input type="text" value="{{ $supplier->name }}" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{ $supplier->email }}" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" value="{{ $supplier->phone }}" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=address">Address</label>
                                <input type="text" value="{{ $supplier->address }}" name="address" class="form-control" id="address" placeholder="Enter Your Address">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" value="{{ $supplier->type }}" name="type" class="form-control" id="type" placeholder="Enter Your Shop Type" >
                                @error('type')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="shop">shopname</label>
                                <input type="text" value="{{ $supplier->shop }}" name="shop" class="form-control" id="shop" placeholder="Enter Your Shopname" >
                                @error('shop')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="account_holder">Account Holder</label>
                                <input type="text" value="{{ $supplier->account_holder }}" name="account_holder" class="form-control" id="account_holder" placeholder="Enter Your Account Holder Name" >
                                @error('account_holder')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <input type="text" value="{{ $supplier->account_number }}" name="account_number" class="form-control" id="account_number" placeholder="Enter Account Number" >
                                @error('account_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" value="{{ $supplier->bank_name }}" name="bank_name" class="form-control" id="bank_name" placeholder="Enter Your Bank Name" >
                                @error('bank_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="branch_name">Bank Branch</label>
                                <input type="text" value="{{ $supplier->branch_name }}" name="branch_name" class="form-control" id="branch_name" placeholder="Enter Your Bank Branch">
                                @error('branch_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" value="{{ $supplier->city }}" name="city" class="form-control" id="city" placeholder="Enter Your City">
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Old Photo</label>
                                <img src="{{asset('public/Image/Supplier/Photo')}}/{{ $supplier->photo }}" alt="Supplier Image" width="500" height="400">
                            </div>
                            <div class="form-group">
                                <label for="photo">Upload New Photo</label>
                                <input type="file" name="photo" class="form-control" id="photo" >
                                @error('photo')
                                    <strong class="alert alert-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                        </form>
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection