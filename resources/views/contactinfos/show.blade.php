@extends('adminlte::page')

@section('title', 'Contact Information')

@section('content_header')
    <h1>Contact Information</h1>
@stop

@section('content')
    <h2>{{ $contactinfo->title; }}</h2>
    <div><p>{{ $contactinfo->sales_name; }}</p></div>
    <div><p>{{ $contactinfo->sales_email; }}</p></div>
    <div><p>{{ $contactinfo->sales_number; }}</p></div>
    <div><p>{{ $contactinfo->tech_name; }}</p></div>
    <div><p>{{ $contactinfo->tech_email; }}</p></div>
    <div><p>{{ $contactinfo->tech_number; }}</p></div>
@stop
