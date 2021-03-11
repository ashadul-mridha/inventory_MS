@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Edit  Customer</h4>
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
                    <div class="panel-heading"><h3 class="panel-title">Edit Customer Details</h3></div>
                    <div class="panel-body">
                        <form role="form" method="post" action="/customers/{{$customer->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="{{ $customer->name }}" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{ $customer->email }}" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" value="{{ $customer->phone }}" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=address">Address</label>
                                <input type="text" value="{{ $customer->address }}" name="address" class="form-control" id="address" placeholder="Enter Your Address">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="shopname">Shop Name</label>
                                <input type="text" value="{{ $customer->shopname }}" name="shopname" class="form-control" id="shopname" placeholder="Enter Your Shop Name" >
                                @error('shopname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="account_holder">Account Holder</label>
                                <input type="text" value="{{ $customer->account_holder }}" name="account_holder" class="form-control" id="account_holder" placeholder="Enter Your Account Holder" >
                                @error('account_holder')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="account_number">Account Number</label>
                                <input type="text" value="{{ $customer->account_number }}" name="account_number" class="form-control" id="account_number" placeholder="Enter Account Number" >
                                @error('account_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="text" value="{{ $customer->bank_name }}" name="bank_name" class="form-control" id="bank_name" placeholder="Enter Your Bank Name">
                                @error('bank_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bank_branch">Bank Branch</label>
                                <input type="text" value="{{ $customer->bank_branch }}" name="bank_branch" class="form-control" id="bank_branch" placeholder="Enter Your Bank Branch">
                                @error('bank_branch')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" value="{{ $customer->city }}" name="city" class="form-control" id="city" placeholder="Enter Your City" >
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="text" value="{{ $customer->photo }}" name="photo" class="form-control" id="photo" >
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