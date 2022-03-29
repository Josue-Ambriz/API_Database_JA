@extends('adminlte::page')

@section('title', 'Note Information')

@section('content_header')
    <h1>Note Information</h1>
@stop

@section('content')
    <h2>{{ $note->title; }}</h2>
    <div><p>{{ $note->note; }}</p></div>
    <div><p>{{ $note->hardware_id; }}</p></div>
    <div><p>{{ $note->service; }}</p></div>
    
    <h4>
        <div>
            <a href="{{route('notes.edit', ['note'=>$note->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('notes.destroy', ['note'=>$note->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
