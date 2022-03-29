@extends('adminlte::page')

@section('title', 'Edit Hardware')

@section('content_header')
  <h1>Edit Hardware</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.update', ['hardware'=>$hardware->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-input name="name" value="{{ $hardware->name }}" label="Name" />
  <x-adminlte-input name="hwcategory_id" value="{{ $hardware->hwcategory_id }}" label="Category" />
  <x-adminlte-input name="cpu" value="{{ $hardware->cpu }}" label="CPU" />
  <x-adminlte-input name="ram" value="{{ $hardware->ram }}" label="RAM" />
  <x-adminlte-input name="storage" value="{{ $hardware->storage }}"  label="Storage" />
  <x-adminlte-input name="software" value="{{ $hardware->software }}" label="Software" />
  <x-adminlte-input name="manufacturer_id" value="{{ $hardware->manufacturer_id }}"  label="Manufacturer" />
  <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
