@extends('layouts.master-user')
@section('title', 'Total point of employees')
@section('main-content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <h3 class="title text-uppercase" style="text-align: center;">POINT DETAIL OF {{$employee->name}}</h3>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover text-center">
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Point</th>
            <th>Assign Date</th>
          </tr>
          <?php
          $stt = 1;
          ?>
          @foreach($employee_info as $employee)
          <tr>
            <td>{{$stt}}</td>
            <td>{{$employee['name']}}</td>
            <td>{{$employee['point']}}</td>
            <td>{{$employee['assigned_at']}}</td>
          </tr>
          <?php
          $stt = $stt + 1;;
          ?>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  @endsection