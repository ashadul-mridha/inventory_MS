@extends('layouts.app')


@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Add Product</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('product.create') }}">Forms</a></li>
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
                    <div class="panel-heading"><h3 class="panel-title text-white">Add Product Details</h3></div>
                    <a href="{{ route('product.index') }}" class="btn btn-primary pull-right"> All product</a>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/products') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" value="{{ old('product_name') }}" name="product_name" class="form-control" id="product_name" placeholder="Enter Product Name">
                                @error('product_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                @php
                                    use App\Models\Category;
                                    $category = Category::all();
                                @endphp
                                <label for="category_id">Category Name</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach ($category as $row)
                                            <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                        @endforeach
                                    </select>   
                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                @php
                                    use App\Models\Supplier;
                                    $supplier = Supplier::all();
                                @endphp
                                <label for="supplier_id">Supplier Name</label>
                                    <select name="supplier_id" id="supplier_id" class="form-control">
                                        @foreach ($supplier as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>   
                                @error('supplier_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_code">Product Code</label>
                                <input type="text" value="{{ old('product_code') }}" name="product_code" class="form-control" id="product_code" placeholder="Enter Product Code">
                                @error('product_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_garage">Product Garage</label>
                                <input type="text" value="{{ old('product_garage') }}" name="product_garage" class="form-control" id="product_garage" placeholder="Enter Product Garage">
                                @error('product_garage')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="product_route">Product Route</label>
                                <input type="text" value="{{ old('product_route') }}" name="product_route" class="form-control" id="product_route" placeholder="Enter Product Route">
                                @error('product_route')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="buy_date">Buy Date</label>
                                <input type="date" value="{{ old('buy_date') }}" name="buy_date" class="form-control" id="buy_date" placeholder="Enter Buy Date">
                                @error('buy_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="expire_date">Expire Date</label>
                                <input type="date" value="{{ old('expire_date') }}" name="expire_date" class="form-control" id="expire_date" placeholder="Enter Expire Date">
                                @error('expire_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="buying_price">Buying Price</label>
                                <input type="text" value="{{ old('buying_price') }}" name="buying_price" class="form-control" id="buying_price" placeholder="Enter Buying Price">
                                @error('buying_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="selling_price">Selling Price</label>
                                <input type="text" value="{{ old('selling_price') }}" name="selling_price" class="form-control" id="selling_price" placeholder="Enter Selling Price">
                                @error('selling_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Product_image">Product Image</label>
                                <input type="file" value="{{ old('Product_image') }}" name="Product_image" class="form-control" id="Product_image" >
                                @error('Product_image')
                                    <strong class="alert alert-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Add Product</button>
                        </form>
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection