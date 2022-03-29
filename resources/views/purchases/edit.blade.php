@extends('adminlte::page')

@section('title', 'Edit Purchase')

@section('content_header')
  <h1>Edit Purchase</h1>
@stop

@section('content')
<form method="post" action="{{ route('purchases.update', ['purchase'=>$purchase->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-input name="invoice" value="{{ $purchase->invoice }}" label="Edit Invoice" />
  <x-adminlte-input name="price" value="{{ $purchase->price }}" label="Edit Price" />
  <x-adminlte-input name="hardware_id" value="{{ $purchase->hardware_id }}" label="Edit Hardware ID" />
  <x-adminlte-input name="userinfo_id" value="{{ $purchase->userinfo_id }}" label="Edit User ID" />
  <x-adminlte-input name="purchased_on" value="{{ $purchase->purchased_on }}"  label="Edit Purchase Date" />
  <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
