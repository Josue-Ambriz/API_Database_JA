@extends('adminlte::page')

@section('title', 'Contact Information')

@section('content_header')
    <h1>Contact Information</h1>
@stop

@section('content')
<form method="post" action="{{ route('contactinfos.store') }}" >
    @csrf
    <x-adminlte-input name="sales_name" label="Sales Name is" />
    <x-adminlte-input name="sales_email" label="Sales Email is" />
    <x-adminlte-input name="sales_number" label="Sales Number is" />
    <x-adminlte-input name="tech_name" label="Tech Support Name" />
    <x-adminlte-input name="tech_email" label="Tech Support Email" />
    <x-adminlte-input name="tech_number" label="Tech Support Number" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
