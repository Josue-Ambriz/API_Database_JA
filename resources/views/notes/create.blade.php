@extends('adminlte::page')

@section('title', 'Add New Note')

@section('content_header')
    <h1>Add New Note</h1>
@stop

@section('content')
<form method="post" action="{{ route('notes.store') }}" >
    @csrf
    <x-adminlte-input name="note" label="Note" />
    <x-adminlte-input name="purchase_id" label="Purchase ID" />
    <x-adminlte-input name="service" label="Service" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
