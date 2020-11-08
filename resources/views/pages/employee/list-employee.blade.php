@extends('layouts.master')
@section('title', 'List All Employee')
@section('breadcumb')
<h1>
    List All Employee
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('employee.index')}}">Employee</a></li>
    <li class="active">List All Employee</li>
</ol>
@endsection

@section('main-content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href="{{route('employee.create')}}" class="btn btn-success">Add new</a></h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover text-center">
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Employee Name</th>
                        <th>Email</th>
                        <th>Option</th>
                    </tr>
                    <?php
                    $stt = 1;
                    ?>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>
                            <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
                            <!-- <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a> -->
                            <form action="{{route('employee.destroy', $employee->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    $stt = $stt + 1;;
                    ?>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection