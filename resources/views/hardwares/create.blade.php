@extends('adminlte::page')

@section('title', 'List of Hardwares in Our Inventory')

@section('content_header')
    <h1>List of Hardwares in Our Inventory</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardwares.store') }}" >
    @csrf
    <x-adminlte-input name="name" label="Name of electronic equipment," />
    <x-adminlte-input name="hwcategory_id" label="Category of electronic equipment," />
    <x-adminlte-options :options="['Desktop', 'Laptop', 'Phone', 'Tablet', 'Gaming Console']"
        placeholder="Please choose one,"/>
    <x-adminlte-input name="cpu" label="CPU Information," />
    <x-adminlte-input name="ram" label="RAM Information" />
    <x-adminlte-input name="storage" label="Storage Information," />
    <x-adminlte-input name="service" label="Service Informaton," />
    <x-adminlte-input name="software" label="Software of electronic equipment," />
    <x-adminlte-options :options="['Orbis OS (Playstation Only)', 'Windows', 'Linux', 'Andriod', 'Apple iOS']"
        placeholder="Please choose one,"/>
    <x-adminlte-input name="price" label="Price Value," />
    <x-adminlte-input name="manufacturer_id" label="Manufacturer Information," />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

