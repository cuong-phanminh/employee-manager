@extends('layouts.master')
@section('title', 'Edit Employee')
@section('breadcumb')
<h1>
    Update Employee Criteria
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('employee.index')}}">Employee</a></li>
    <li class="active">Edit Employee</li>
</ol>
@endsection

@push('links')

<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

@endpush

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Employee Criteria</h3>
            </div>
            <form action="#" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Employee Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter employee name" value="{{$employee->name}}" readonly>
                        <input type="hidden" class="form-control" name="employee_id" id="id" placeholder="Enter employee name" value="{{$employee->id}}">
                    </div>
                    <div class="form-group">
                        <label>Criterias</label>
                        <select class="form-control" name="criteria_id" id="criteria">
                            <option value="">Choose criteria</option>
                            @foreach($criterias as $criteria)
                            <option value="{{$criteria->id}}">{{$criteria->name}} {{' ('}} {{$criteria->point}} {{')'}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Date update</label>
                        <input type="date" class="form-control" name="assigned_at" id="assigned_at" placeholder="Enter employee name" value="Phan Van a">
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