@extends('layouts.master')
@section('title', 'Edit Employee')
@section('breadcumb')
<h1>
    Edit Employee
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('employee.index')}}">Employee</a></li>
    <li class="active">Edit Employee</li>
</ol>
@endsection

@push('links')

<!-- <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->

@endpush

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Employee</h3>
            </div>
            <form action="{{route('employee.update', $employeeById->id)}}" method="POST" role="form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Employee Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter employee name" value="{{$employeeById->name}}">
                        @error('name')
                        <div class="error" style="color: red;">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Employee Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter employee email" value="{{$employeeById->email}}">
                        @error('email')
                        <div class="error" style="color: red;">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-warning btn-edit-product">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection