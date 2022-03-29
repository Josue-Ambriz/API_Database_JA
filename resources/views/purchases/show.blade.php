@extends('adminlte::page')

@section('title', 'Purchase Information')

@section('content_header')
    <h1>Purchase Information</h1>
@stop

@section('content')
    <h2>{{ $purchase->title; }}</h2>
    <div><p>{{ $purchase->invoice; }}</p></div>
    <div><p>{{ $purchase->price; }}</p></div>
    <div><p>{{ $purchase->hardware_id; }}</p></div>
    <div><p>{{ $purchase->userinfo_id; }}</p></div>
    <div><p>{{ $purchase->purchased_on; }}</p></div>
    
    <h4>
        <div>
            <a href="{{route('purchases.edit', ['purchase'=>$purchase->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('purchases.destroy', ['purchase'=>$purchase->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
