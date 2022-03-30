@extends('adminlte::page')

@section('title', 'Edit Website Information')

@section('content_header')
  <h1>Edit Website Information</h1>
@stop

@section('content')
<form method="post" action="{{ route('contactinfos.update', ['contactinfo'=>$contactinfo->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-input name="owner" value="{{ $contactinfo->owner }}" label="Name of Owner" />
  <x-adminlte-input name="info" value="{{ $contactinfo->info }}" label="Name of Organization" />
  <x-adminlte-input name="email" value="{{ $contactinfo->email }}" label="Email" />
  <x-adminlte-input name="note_id" value="{{ $contactinfo->note_id }}" label="Edit Total Notes" />
  <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
