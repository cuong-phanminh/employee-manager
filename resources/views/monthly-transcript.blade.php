@extends('layouts.master-user')
@section('title', 'Total point of employees')
@section('main-content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <h3 class="title" style="text-align: center;">TOTAL POINT OF EMPLOYEES</h3>
      <div class="box-header">
        <form action="" method="post">
          <div class="input-append date" id="datepicker" data-date="02-2012" data-date-format="mm-yyyy">
            <input type="month" name="month" id="month-picker" onchange="onMonthChanged()">
            <span class="add-on"><i class="icon-th"></i></span>
          </div>
        </form>
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
            <th>User Name</th>
            <th>Total Point</th>
            <th>Point detail</th>
          </tr>
          <?php
          $stt = 1;
          ?>
          @foreach($employees as $employee)
          <tr>
            <td>{{$stt}}</td>
            <td>{{$employee['name']}}</td>
            <td>{{$employee['total_point']}}</td>
            <td>
              <a href="{{route('user.pointDetail', $employee['id']) . '?selected_month=' . $selected_month}}" class="btn btn-info"><span class="glyphicon glyphicon-list-alt"></span></a>
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

<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    let today = new Date();
    let currentMonth = `${today.getFullYear()}-${today.getMonth() + 1}`;
    var url = new URL(window.location.href);
    var c = url.searchParams.get("selected_month");
    if (!c) {
      url.searchParams.set('selected_month', currentMonth);
      window.location.replace(url)
    } else {
      document.getElementById('month-picker').value = c;
    }
  });

  function onMonthChanged() {
    let selectedMonth = document.getElementById('month-picker').value;
    var url = new URL(window.location.href);
    url.searchParams.set('selected_month', selectedMonth);
    window.location.replace(url);
  }
</script>