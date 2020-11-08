@extends('layouts.master')
@section('title', 'Edit Employee')
@section('breadcumb')
<h1>
    Add Employee
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('employee.index')}}">Employee</a></li>
    <li class="active">Add Employee</li>
</ol>
@endsection

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Employee</h3>
            </div>
            <form action="{{route('employee.store')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Employee Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your product name"
                            value="">
                    </div>
                    <div class="form-group">
                        <label for="email">Employee Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter employee email"
                            value="">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-warning btn-edit-product">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
