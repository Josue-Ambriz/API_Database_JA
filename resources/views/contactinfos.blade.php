@extends('adminlte::page')

@section('title', 'Website Information')

@section('content_header')
    <h1>Website Information</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Owner</th><th>Information</th><th>Email</th>
        </tr>
      </thead>
      <tbody>

        @foreach($contactinfos AS $contactinfo)
        <tr>
          <td>{{ $contactinfo->id }}</td>
          <td>{{ $contactinfo->owner }}</td>
          <td>{{ $contactinfo->info }}</td>
          <td>{{ $contactinfo->email }}</td>
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

