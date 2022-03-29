@extends('adminlte::page')

@section('title', 'Edit Current Note')

@section('content_header')
  <h1>Edit Current Note</h1>
@stop

@section('content')
<form method="post" action="{{ route('notes.update', ['note'=>$note->id]) }}">
  @csrf
  @method('PUT')
  <x-adminlte-input name="note" value="{{ $note->note }}" label="Edit Note" />
  <x-adminlte-input name="hardware_id" value="{{ $note->hardware_id }}" label="Edit Hardware ID" />
  <x-adminlte-input name="service" value="{{ $note->service }}" label="Edit Service" />
  <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
