@extends('adminlte::page')

@section('title', 'Add Manufacturer')

@section('content_header')
    <h1>Add Manufacturer</h1>
@stop

@section('content')
<form method="post" action="{{ route('manufacturers.store') }}" >
    @csrf
    <x-adminlte-input name="company" label="Company Name is" />
    <x-adminlte-input name="sales_email" label="Sales Email is" />
    <x-adminlte-input name="sales_number" label="Sales Number is" />
    <x-adminlte-input name="tech_email" label="Tech Support Email" />
    <x-adminlte-input name="tech_number" label="Tech Support Number" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop


@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ route('manufacturers.store') }}" method="POST">
      <div class="card">
        <div class="card-header p-2">
          <h3 class="card-title">Manufacturer Infomation</h3>
        </div>
        <div class="card-body">
          @csrf
          <div class="row">
              <x-adminlte-input name="company" label="Company Name" fgroup-class="col-md-12" />
              <x-adminlte-input name="sales_email" label="Sales Email" fgroup-class="col-md-6" />
              <x-adminlte-input name="sales_number" label="Sales Number" fgroup-class="col-md-6" />
              <x-adminlte-input name="tech_email" label="Tech Email" fgroup-class="col-md-6" />
              <x-adminlte-input name="tech_number" label="Tech Number" fgroup-class="col-md-6" />
          </div>
        </div>
        <div class="card-footer">
          <button type="Submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('manufacturers.index') }}" class="btn btn-danger float-right">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    </script>
@stop
