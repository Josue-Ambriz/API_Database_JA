@extends('adminlte::page')

@section('title', 'Add New User')

@section('content_header')
    <h1>Add New User</h1>
@stop

@section('content')
<form method="post" action="{{ route('usersinfos.store') }}" >
    @csrf
    <x-adminlte-input name="first_name" label="First Name" />
    <x-adminlte-input name="last_name" label="Last Name" />
    <x-adminlte-input name="email" label="Email" />
    <x-adminlte-input name="number" label="Number" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
