@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
    <h2>{{ $hardware->title; }}</h2>
    <div><p>{{ $hardware->name; }}</p></div>
    <div><p>{{ $hardware->hwcatory_id; }}</p></div>
    <div><p>{{ $hardware->cpu; }}</p></div>
    <div><p>{{ $hardware->ram; }}</p></div>
    <div><p>{{ $hardware->storage; }}</p></div>
    <div><p>{{ $hardware->software; }}</p></div>
    <div><p>{{ $hardware->manufacturer_id; }}</p></div>
    
    <h4>
        <div>
            <a href="{{route('hardwares.edit', ['hardware'=>$hardware->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('hardwares.destroy', ['hardware'=>$hardware->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
