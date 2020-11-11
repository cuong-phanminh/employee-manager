@extends('layouts.master')
@section('title', 'Edit Employee')
@section('breadcumb')
<h1>
    Edit Criteria
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('criteria.index')}}">Criteria</a></li>
    <li class="active">Edit Criteria</li>
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
                <h3 class="box-title">Update Criteria</h3>
            </div>
            <form action="{{route('criteria.update', $criteriaById->id)}}" method="POST" role="form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Criteria Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter criteria name" value="{{$criteriaById->name}}">
                        @error('name')
                        <div class="error" style="color: red;">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="point_criteria">Point criteria</label>
                        <input type="text" class="form-control" name="point" id="point_criteria" placeholder="Enter point criteria" value="{{$criteriaById->point}}">
                        @error('point')
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