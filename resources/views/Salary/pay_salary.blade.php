@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">All Salary Details</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('salary.pay') }}">All Salary Details</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">All Salary Details 
                            <span class="pull-right text-danger">{{ date('M Y') }}</span>
                        </h3>
                        <a href="#" class="btn btn-primary pull-right"> Pay Advanced</a>
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
                                            {{-- <th>Advanced</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                             
                                    <tbody>
                                        @foreach ($employee as $row)
                                            <tr>
                                                <td>{{ $row->name }}</td>
                                                <td><img src="{{ asset($row->photo) }}" style="height: 80px; width: 80px;" alt="supplier image"></td>
                                                <td>{{ $row->salary }}</td>
                                                <td><span class="badge badge-success">{{ date('F',strtotime('-1 months')) }}</span></td>
                                                {{-- <td>{{ $row->advanced_salary }}</td> --}}
                                                <td>
                                                    <a href=" # " class="btn btn-sm btn-primary"> Pay Salary </a>
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