@extends('adminlte::page')

@section('title', 'Category Information')

@section('content_header')
    <h1>Category Information</h1>
@stop

@section('content')
    <h2>{{ $hwcategory->title; }}</h2>
    <div><p>{{ $hwcategory->type; }}</p></div>
    
    <h4>
        <div>
            <div style="display: inline">
              <form style="margin: 0; padding: 0" action="{{ route('hwcategories.destroy', ['hwcategory'=>$hwcategory->id]) }}" method="POST">
                <a class="btn btn-default" href="{{ route('hwcategories.edit', ['hwcategory'=>$hwcategory->id]) }}">Edit</a>
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
