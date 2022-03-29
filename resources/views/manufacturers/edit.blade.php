@extends('adminlte::page')

@section('title', 'Edit Manufacturer')

@section('content_header')
  <h1>Edit Manufacturer</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.update', ['manufacturer'=>$manufacturer->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-input name="company" value="{{ $manufacturer->company }}" label="Company Name is" />
  <x-adminlte-input name="sales_email" value="{{ $manufacturer->sales_email }}" label="Sales Email is" />
  <x-adminlte-input name="sales_number" value="{{ $manufacturer->sales_number }}" label="Sales Number is" />
  <x-adminlte-input name="tech_email" value="{{ $manufacturer->tech_email }}" label="Tech Support Email" />
  <x-adminlte-input name="tech_number" value="{{ $manufacturer->tech_number }}"  label="Tech Support Number" />
  <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
