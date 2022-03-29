@extends('adminlte::page')

@section('title', 'Website Information')

@section('content_header')
    <h1>Website Information</h1>
@stop

@section('content')
    <h2>{{ $contactinfo->title; }}</h2>
    <div><p>{{ $contactinfo->owner; }}</p></div>
    <div><p>{{ $contactinfo->info; }}</p></div>
    <div><p>{{ $contactinfo->email; }}</p></div>
    
   <h4>
        <div>
            <a href="{{route('contactinfos.edit', ['contactinfo'=>$contactinfo->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('contactinfos.destroy', ['contactinfo'=>$contactinfo->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
