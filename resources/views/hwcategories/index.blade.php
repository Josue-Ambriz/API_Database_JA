@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('hwcategories.create') }}" class="btn btn-success float-right">+ Add</a>
    <h1>Hardware Category</h1>
@stop

@section('content')
<div class="row">
  @foreach($hwcategories AS $item)
    <div class="col-md-3 col-sm-6 col-12">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $item->hardware->count() }}</h3>
          <p>{{ $item->type }} device</p>
          </div>
          <div class="icon">
          <i class="fas fa-file"></i>
        </div>
        <a href="{{ route('hwcategories.show',['hwcategory'=>$item]) }}" class="small-box-footer">
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
