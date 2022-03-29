@extends('adminlte::page')

@section('title', 'Add Purchase')

@section('content_header')
    <h1>Add Purchase</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.store') }}" >
    @csrf
    <x-adminlte-input name="invoice" label="Invoice" />
    <x-adminlte-input name="price" label="Price" />
    <x-adminlte-input name="hardware_id" label="Hardware ID" />
    <x-adminlte-input name="userinfo_id" label="User ID" />
    <x-adminlte-input name="purchased_on" label="Purchased On" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
