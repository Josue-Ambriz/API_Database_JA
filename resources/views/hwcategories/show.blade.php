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
            <a href="{{route('hwcategories.edit', ['manufacturer'=>$hwcategory->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('hwcategories.destroy', ['hwcategory'=>$hwcategory->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
