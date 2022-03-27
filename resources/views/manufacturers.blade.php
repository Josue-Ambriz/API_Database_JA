@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer Information</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Sales Name</th><th>Sales Email</th><th>Sales Number</th><th>Tech Name</th><th>Tech Email</th><th>Tech Number</th>
        </tr>
      </thead>
      <tbody>

        @foreach($manufacturers AS $manufacturer)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->sales_name }}</td>
          <td>{{ $manufacturer->sales_email }}</td>
          <td>{{ $manufacturer->sales_number }}</td>
          <td>{{ $manufacturer->tech_name }}</td>
          <td>{{ $manufacturer->tech_email }}</td>
          <td>{{ $manufacturer->tech_number }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manufacturers.create') }} " class="btn btn-primary" >Add</a>
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
KKK
