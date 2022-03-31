@extends('adminlte::page')

@section('title', 'Add Hardware')

@section('content_header')
    <h1>Add Hardware</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name of electronic equipment" />
    <x-adminlte-input name="hwcategory_id" label="Category of electronic equipment" />
    <x-adminlte-input name="cpu" label="CPU Information" />
    <x-adminlte-input name="ram" label="RAM Information" />
    <x-adminlte-input name="storage" label="Storage Information" />
    <x-adminlte-input name="software" label="Software of Electronic Equipment" />
    <x-adminlte-input name="manufacturer_id" label="Manufacturer Information" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

