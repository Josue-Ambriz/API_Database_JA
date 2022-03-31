@extends('adminlte::page')

@section('title', 'Edit User Information')

@section('content_header')
  <h1>Edit User Information</h1>
@stop

@section('content')
<form method="post" action="{{ route('usersinfos.update', ['usersinfo'=>$userinfo->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-input name="first_name" value="{{ $userinfo->first_name }}" label="Edit First Name" />
  <x-adminlte-input name="last_name" value="{{ $userinfo->last_name }}" label="Edit Last Name" />
  <x-adminlte-input name="email" value="{{ $userinfo->email }}" label="Edit Email" />
  <x-adminlte-input name="phone" value="{{ $userinfo->phone }}" label="Edit Phone Number" />
  <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
