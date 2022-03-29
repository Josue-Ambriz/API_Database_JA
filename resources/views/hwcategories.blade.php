@extends('adminlte::page')

@section('title', 'Hardware Category')

@section('content_header')
    <h1>Hardware Category</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Type of Category</th>
        </tr>
      </thead>
      <tbody>

        @foreach($hwcategories AS $hwcategory)
        <tr>
          <td>{{ $hwcategory->id }}</td>
          <td>{{ $hwcategory->type }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('hwcategories.show',['hwcategory'=>$hwcategory->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('hwcategories.create') }} " class="btn btn-primary" >Add</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
