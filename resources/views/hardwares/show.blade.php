@extends('adminlte::page')

@section('title', 'Contact Information')

@section('content_header')
    <h1>Contact Information</h1>
@stop

@section('content')
    <h2>{{ $hardware->title; }}</h2>
    <div><p>{{ $hardware->name; }}</p></div>
    <div><p>{{ $hardware->hwcatory_id; }}</p></div>
    <div><p>{{ $hardware->cpu; }}</p></div>
    <div><p>{{ $hardware->ram; }}</p></div>
    <div><p>{{ $hardware->storage; }}</p></div>
    <div><p>{{ $hardware->service; }}</p></div>
    <div><p>{{ $hardware->software; }}</p></div>
    <div><p>{{ $hardware->price; }}</p></div>
    <div><p>{{ $hardware->manufacturer_id; }}</p></div>
@stop
