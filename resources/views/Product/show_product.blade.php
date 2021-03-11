@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Product Details</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="#">Product Details</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <!-- Basic example -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Product Details</h3></div>
                    <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <p> {{ $product->product_name }} </p>
                            </div>
                            <div class="form-group">
                                <label for="email">Product Code</label>
                                <p> {{ $product->product_code }} </p>
                            </div>
                            <div class="form-group">
                                <label for="phone">Product Garage</label>
                                <p> {{ $product->product_garage }} </p>
                            </div>
                            <div class="form-group">
                                <label for=address">Product Route</label>
                                <p> {{ $product->product_route }} </p>
                            </div>
                            <div class="form-group">
                                @php
                                    use App\Models\Category;
                                    $category = Category::findorfail($product->category_id);
                                @endphp
                                <label for="exprience">Category Name</label>
                                <p> {{ $category->category_name }} </p>
                            </div>
                            <div class="form-group">
                                @php
                                    use App\Models\Supplier;
                                    $supplier = Supplier::findorfail($product->supplier_id);
                                @endphp
                                <label for="exprience">Supplier Name</label>
                                <p> {{ $supplier->name }} </p>
                            </div>
                            <div class="form-group">
                                <label for="salary">Buy Date</label>
                                <p> {{ $product->buy_date }} </p>
                            </div>
                            <div class="form-group">
                                <label for="vacation">Expire Date</label>
                                <p> {{ $product->expire_date }} </p>
                            </div>
                            <div class="form-group">
                                <label for="bank_name">Buying Price</label>
                                <p> {{ $product->buying_price }} </p>
                            </div>
                            <div class="form-group">
                                <label for="bank_branch">Selling Price</label>
                                <p> {{ $product->selling_price }} </p>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <p> {{ $product->product_image }} </p>
                            </div>

                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection