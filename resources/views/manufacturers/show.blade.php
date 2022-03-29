@extends('adminlte::page')

@section('title', 'Manufacturer Information')

@section('content_header')
    <h1>Manufacturer Information</h1>
@stop

@section('content')
    <h2>{{ $manufacturer->title; }}</h2>
    <div><p>{{ $manufacturer->company; }}</p></div>
    <div><p>{{ $manufacturer->sales_email; }}</p></div>
    <div><p>{{ $manufacturer->sales_number; }}</p></div>
    <div><p>{{ $manufacturer->tech_email; }}</p></div>
    <div><p>{{ $manufacturer->tech_number; }}</p></div>
    
    <h4>
        <div>
            <a href="{{route('manufacturers.edit', ['manufacturer'=>$manufacturer->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('manufacturers.destroy', ['manufacturer'=>$manufacturer->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
