@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="content">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Add Employee</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li ><a href="{{ route('expense.create') }}">Forms</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <!-- Basic example -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Add Expenseive Details</h3></div>
                    <a href="{{ route('expense.index') }}" class="btn btn-primary pull-right"> All Expense</a>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/expense') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="details">Details</label>
                                <textarea class="form-control" id="details" name="details" rows="4"></textarea>
                                @error('details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" value="{{ old('amount') }}" name="amount" class="form-control" id="amount" placeholder="Enter Your Amount">
                                @error('amount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>
                    </div><!-- panel-body -->
                </div> <!-- panel -->
            </div> <!-- col-->
    </div>
</div>
@endsection