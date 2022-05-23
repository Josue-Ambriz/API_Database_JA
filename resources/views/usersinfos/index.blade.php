@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('usersinfos.create') }}" class="btn btn-primary float-right"> + Add</a>
    <h1>Users</h1>
@stop

@section('content')
<div class="row">
  @foreach($usersinfos AS $item)
    <div class="col-md-3 col-sm-6 col-12">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $item->hardware->count() }}</h3>
          <p>{{ $item->name }}</p>
          </div>
          <div class="icon">
          <i class="fas fa-user"></i>
        </div>
        <a href="{{ route('usersinfos.show',['userinfo'=>$item]) }}" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
  @endforeach
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    </script>
@stop
© 2022 GitHub, Inc.
