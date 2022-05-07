@extends('adminlte::page')

@section('title', 'Edit Category')

@section('content_header')
  <h1>Edit Category</h1>
@stop

@section('content')
<form method="post" action="{{ route('hwcategories.update', ['hwcategory'=>$hwcategory->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-input name="type" value="{{ $hwcategory->type }}" label="Type of Category" />
  <x-adminlte-button type="Submit" label="Submit" />
  <a href = class="btn btn-danger float-right">Cancel</a>
</form>
@stop
