@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">All Advanced Salary</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('salary.index') }}">All Advanced Salary</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Advanced Salary</h3>
                        <a href="{{ route('salary.create') }}" class="btn btn-primary pull-right"> Pay Advanced</a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Salary</th>
                                            <th>Month</th>
                                            <th>Advanced</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                             
                                    <tbody>
                                        @foreach ($salary as $row)
                                            <tr>
                                                <td>{{ $row->name }}</td>
                                                <td><img src="{{ asset($row->photo) }}" style="height: 80px; width: 80px;" alt="supplier image"></td>
                                                <td>{{ $row->salary }}</td>
                                                <td>{{ $row->month }}</td>
                                                <td>{{ $row->advanced_salary }}</td>
                                                <td>
                                                    {{-- /customers/{{ $customer->id }}/edit
                                                    /customer-delete/{{ $customer->id }}
                                                    /customers/{{ $customer->id }} --}}
                                                    <a href="#" class="btn btn-sm btn-info"> Edit </a>
                                                    <a href="#" class="btn btn-sm btn-danger"> Delete </a>
                                                    <a href=" # " class="btn btn-sm btn-primary"> View </a>
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