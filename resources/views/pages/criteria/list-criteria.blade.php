@extends('layouts.master')
@section('title', 'List All Employee')
@section('breadcumb')
<h1>
    List All Criteria
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{route('criteria.index')}}">Criteria</a></li>
    <li class="active">List All Criteria</li>
</ol>
@endsection

@section('main-content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href="{{route('criteria.create')}}" class="btn btn-success">Add new</a></h3>
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
                        <th>No</th>
                        <th>Criteria Name</th>
                        <th>Point</th>
                        <th>Option</th>
                    </tr>
                    <?php
                     $stt = 1;
                    ?>
                    @foreach($criterias as $criteria)
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$criteria->name}}</td>
                        <td>{{$criteria->point}}</td>
                        <td>
                            <a href="{{route('criteria.edit',$criteria->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
                            <form action="{{route('criteria.destroy', $criteria->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" onclick="myFunction()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button>
                            </form>
                        </td>
                    </tr>
                    <?php
                     $stt = $stt + 1;
                    ?>
                    @endforeach
                </table>
                <p id="demo"></p>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>