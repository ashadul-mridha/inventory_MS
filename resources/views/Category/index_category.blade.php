@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">All Category</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('category.index') }}">All Category</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Category</h3>
                        <a href="{{ route('category.create') }}" class="btn btn-primary pull-right">Add Category</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl No:</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                             
                                    <tbody>
                                        @php
                                          $slno = 1;  
                                        @endphp
                                        @foreach ($all_category as $row)
                                            <tr>
                                                <td>{{ $slno++ }}</td>
                                                <td>{{ $row->category_name }}</td>
                                                <td>
                                                    <a href="/category-edit/{{ $row->id }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="/category-delete/{{ $row->id }}" class="btn btn-sm btn-danger"> Delete </a>
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