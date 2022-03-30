@extends('adminlte::page')

@section('title', 'User Information')

@section('content_header')
    <h1>User Information</h1>
@stop

@section('content')
    <h2>{{ $userinfo->title; }}</h2>
    <div><p>{{ $userinfo->first_name; }}</p></div>
    <div><p>{{ $userinfo->last_name; }}</p></div>
    <div><p>{{ $userinfo->email; }}</p></div>
    <div><p>{{ $userinfo->phone; }}</p></div>
    
    <h4>
        <div>
            <div style="display: inline">
              <form style="margin: 0; padding: 0" action="{{ route('usersinfos.destroy', ['userinfo'=>$userinfo->id]) }}" method="POST">
                <a class="btn btn-default" href="{{ route('usersinfos.edit', ['userinfo'=>$userinfo->id]) }}">Edit</a>
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
