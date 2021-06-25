@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">All Product</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('product.index') }}">All Product</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    {{-- if data delete then message --}}
                    @if(session()->has('delete'))
                        <div class="alert alert-danger">
                            {{ session()->get('delete') }}
                        </div>
                    @endif
                    {{-- if data Update then message --}}
                    @if(session()->has('update'))
                        <div class="alert alert-success">
                            {{ session()->get('update') }}
                        </div>
                    @endif
                    <div class="panel-heading">
                        <h3 class="panel-title">All Product</h3>
                        <a href="{{ route('product.create') }}" class="btn btn-primary pull-right"> Add Product</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Selling Price</th>
                                            <th>Image</th>
                                            <th>Garage</th>
                                            <th>Route</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                             
                                    <tbody>
                                        @foreach ($product as $row)
                                            <tr>
                                                <td>{{ $row->product_name }}</td>
                                                <td>{{ $row->product_code }}</td>
                                                <td>{{ $row->selling_price }}</td>
                                                <td><img src="{{ asset('Public/Image/Product/Photo') }}/{{$row->product_image}}" style="height: 80px; width: 80px;" alt="Product image"></td>
                                                <td>{{ $row->product_garage }}</td>
                                                <td>{{ $row->product_route }}</td>
                                                <td>
                                                    <a href="/products/{{ $row->id }}/edit" class="btn btn-sm btn-info"> Edit </a>
                                                    <a href="/product-delete/{{ $row->id }}" class="btn btn-sm btn-danger"> Delete </a>
                                                    <a href="/products/{{ $row->id }}" class="btn btn-sm btn-primary"> View </a>
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