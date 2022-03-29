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
@stop
