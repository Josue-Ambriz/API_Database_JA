@extends('adminlte::page')

@section('title', 'Contact Information')

@section('content_header')
    <h1>Contact Information</h1>
@stop

@section('content')
<form method="post" action="{{ route('contactinfos.store') }}" >
    @csrf
    <x-adminlte-input name="owner" label="Name of Owner" />
    <x-adminlte-input name="info" label="Name of Organization" />
    <x-adminlte-input name="email" label="Email" />
    <x-adminlte-input name="note_id" label="Total Notes" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
