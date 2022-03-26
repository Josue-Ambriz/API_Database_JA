@extends('adminlte::page')

@section('title', 'Manufacturer Information')

@section('content_header')
    <h1>Manufacturer Information</h1>
@stop

@section('content')
    <h2>{{ $manufacturer->title; }}</h2>
    <div><p>{{ $manufacturer->sales_name; }}</p></div>
    <div><p>{{ $manufacturer->sales_email; }}</p></div>
    <div><p>{{ $manufacturer->sales_number; }}</p></div>
    <div><p>{{ $manufacturer->tech_name; }}</p></div>
    <div><p>{{ $manufacturer->tech_email; }}</p></div>
    <div><p>{{ $manufacturer->tech_number; }}</p></div>
@stop
