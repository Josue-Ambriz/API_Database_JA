@extends('adminlte::page')

@section('title', 'Contact Information')

@section('content_header')
    <h1>Contact Information</h1>
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

        @foreach($contactinfos AS $contactinfo)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $contactinfo->sales_name }}</td>
          <td>{{ $contactinfo->sales_email }}</td>
          <td>{{ $contactinfo->sales_number }}</td>
          <td>{{ $contactinfo->tech_name }}</td>
          <td>{{ $contactinfo->tech_email }}</td>
          <td>{{ $contactinfo->tech_number }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('contactinfos.create') }} " class="btn btn-primary" >Add</a>
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

