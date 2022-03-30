@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th>
        </tr>
      </thead>
      <tbody>

        @foreach($usersinfos AS $userinfo)
        <tr>
          <td>{{ $userinfo->id }}</td>
          <td>{{ $userinfo->first_name }}</td>
          <td>{{ $userinfo->last_name }}</td>
          <td>{{ $userinfo->email }}</td>
          <td>{{ $userinfo->phone }}</td>
          <td>
            <div style="text-align: center;">
                <a class="btn btn-default" href="{{ route('usersinfos.show', ['userinfo'=>$userinfo->id]) }}">View</a>
              </div>
          </td>
          <td>
            <div style="display: inline">   
                
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('usersinfos.create') }} " class="btn btn-primary" >Add</a>
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
