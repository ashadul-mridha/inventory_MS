@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">All Supplier</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('supplier.index') }}">All Supplier</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Supplier</h3>
                        <a href="{{ route('supplier.create') }}" class="btn btn-primary pull-right"> Add Supplier</a>
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
                                        @foreach ($suppliers as $supplier)
                                            <tr>
                                                <td>{{ $supplier->name }}</td>
                                                <td>{{ $supplier->phone }}</td>
                                                <td>{{ $supplier->address }}</td>
                                                <td>
                                                    <img src="{{asset('public/Image/Supplier/Photo')}}/{{ $supplier->photo }}" alt="Supplier Image" width="80" height="80">
                                                </td>
                                                <td>{{ $supplier->shop }}</td>
                                                <td>
                                                    <a href="/suppliers/{{ $supplier->id }}/edit" class="btn btn-sm btn-info"> Edit </a>
                                                    <a href="/supplier-delete/{{ $supplier->id }}" class="btn btn-sm btn-danger"> Delete </a>
                                                    <a href=" /suppliers/{{ $supplier->id }}" class="btn btn-sm btn-primary"> View </a>
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