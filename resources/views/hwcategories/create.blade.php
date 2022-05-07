@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Add Category</h1>
@stop

@section('content')
<form method="post" action="{{ route('hwcategories.store') }}" >
    @csrf
    <x-adminlte-input name="type" label="Type of Category" />
    <x-adminlte-button type="Submit" label="Submit" />
    <a href = class="btn btn-danger float-right">Cancel</a>
</form>
@stop
