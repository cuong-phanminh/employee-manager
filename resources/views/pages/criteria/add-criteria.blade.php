@extends('layouts.master')
@section('title', 'Edit Employee')
@section('breadcumb')
<h1>
    Add New Criteria
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('criteria.index')}}">Criteria</a></li>
    <li class="active">Add Criteria</li>
</ol>
@endsection

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Criteria</h3>
            </div>
            <form action="{{route('criteria.store')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Criteria Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your criteria name"
                            value="">
                    </div>
                    <div class="form-group">
                        <label>Point</label>
                        <input type="text" class="form-control" name="point" id="point"
                            placeholder="Enter point's criteria" value="">
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
