@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Edit Employee</h4>
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
                    <div class="panel-heading"><h3 class="panel-title">Edit Employee Details</h3></div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ route('employee.update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $employee->id }}" name="id" class="form-control" >
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="{{ $employee->name }}" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{ $employee->email }}" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" value="{{ $employee->phone }}" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=address">Address</label>
                                <input type="text" value="{{ $employee->address }}" name="address" class="form-control" id="address" placeholder="Enter Your Address">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exprience">Exprience</label>
                                <input type="text" value="{{ $employee->exprience }}" name="exprience" class="form-control" id="exprience" placeholder="Enter Your Exprience" >
                                @error('exprience')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="text" value="{{ $employee->salary }}" name="salary" class="form-control" id="salary" placeholder="Enter Your Salary" >
                                @error('salary')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="vacation">Vacation</label>
                                <input type="text" value="{{ $employee->vacation }}" name="vacation" class="form-control" id="vacation" placeholder="Enter Vacation" >
                                @error('vacation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" value="{{ $employee->city }}" name="city" class="form-control" id="city" placeholder="Enter Your City" >
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nid_no">Nation ID No</label>
                                <input type="text" value="{{ $employee->nid_no }}" name="nid_no" class="form-control" id="nid_no" placeholder="Enter Your NID No">
                                @error('nid_no')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Old Photo</label>
                                <img src="{{asset('public/Image/Employee/Photo')}}/{{ $employee->photo }}" alt="Employee Image" width="500" height="400">
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