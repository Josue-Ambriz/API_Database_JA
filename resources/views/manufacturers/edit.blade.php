@extends('adminlte::page')

@section('title', 'Edit Manufacturer')

@section('content_header')
  <h1>Edit Manufacturer</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ route('manufacturers.update',['manufacturer'=>$manufacturer]) }}" method="POST">
      <div class="card">
        <div class="card-header p-2">
          <h3 class="card-title">Edit Hardware Infomation</h3>
        </div>
        <div class="card-body">
          @csrf
          <input type="hidden" name="_method" value="PUT" />
          <div class="row">
              <x-adminlte-input name="company" label="Company Name" fgroup-class="col-md-12" value="{{ old('company')?:$manufacturer->company }}" />
              <x-adminlte-input name="sales_email" label="Sales Email" fgroup-class="col-md-6" value="{{ old('sales_email')?:$manufacturer->sales_email }}" />
              <x-adminlte-input name="sales_number" label="Sales Number" fgroup-class="col-md-6" value="{{ old('sales_number')?:$manufacturer->sales_number }}" />
              <x-adminlte-input name="tech_email" label="Tech Email" fgroup-class="col-md-6" value="{{ old('tech_email')?:$manufacturer->tech_email }}" />
              <x-adminlte-input name="tech_number" label="Tech Number" fgroup-class="col-md-6" value="{{ old('tech_number')?:$manufacturer->tech_number }}" />
          </div>
        </div>
        <div class="card-footer">
          <button type="Submit" class="btn btn-primary float-right">Submit</button>
          <a href="{{ route('manufacturers.show',['manufacturer'=>$manufacturer]) }}" class="btn btn-danger">Cancel</a>
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
