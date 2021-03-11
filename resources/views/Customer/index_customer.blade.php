@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">All Customer</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('customer.index') }}">All Customers</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Customers</h3>
                        <a href="{{ route('customer.create') }}" class="btn btn-primary pull-right"> Add Customer</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Image</th>
                                            <th>Shop Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                             
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->phone }}</td>
                                                <td>{{ $customer->address }}</td>
                                                <td><img src="{{ asset($customer->photo) }}" style="height: 80px; width: 80px;" alt="employee image"></td>
                                                <td>{{ $customer->shopname }}</td>
                                                <td>
                                                    <a href="/customers/{{ $customer->id }}/edit" class="btn btn-sm btn-info"> Edit </a>
                                                    <a href="/customer-delete/{{ $customer->id }}" class="btn btn-sm btn-danger"> Delete </a>
                                                    <a href="/customers/{{ $customer->id }}" class="btn btn-sm btn-primary"> View </a>
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