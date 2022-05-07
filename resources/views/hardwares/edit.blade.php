@extends('adminlte::page')

@section('title', 'Edit Hardware')

@section('content_header')
  <h1>Edit Hardware</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ route('hardwares.update',['hardware'=>$hardware->id]) }}" method="POST">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Hardware Information</h3>
        </div>
        <div class="card-body">
          @csrf
          <input type="hidden" name="_method" value="PUT" />
          <div class="row">
             
             <x-adminlte-select name="manufacturer_id" label="Manufacture *" fgroup-class="col-md-6" >
                @foreach($manufacturers AS $item)
                  <option value="{{ $item->id }}" {{ old('manufacturer_id')==$item->id?'selected':'' }}>{{ $item->name }}</option>
                @endforeach
              </x-adminlte-select>
              
              <x-adminlte-select name="hwcategory_id" label="Category *" fgroup-class="col-md-6" >
                @foreach($hwcategories AS $item)
                  <option value="{{ $item->id }}" {{ old('hwcategory_id')==$item->id?'selected':'' }}>{{ $item->name }}</option>
                @endforeach
              </x-adminlte-select>
              
              <x-adminlte-input name="name" label="Name *" fgroup-class="col-md-6" value="{{ old('name') }}" />
              <x-adminlte-input name="CPU" label="CPU" fgroup-class="col-md-6" value="{{ old('CPU') }}" />
              <x-adminlte-input name="RAM" label="RAM" fgroup-class="col-md-6" value="{{ old('RAM') }}" />
              <x-adminlte-input name="storage" label="Storage" fgroup-class="col-md-6" value="{{ old('storage') }}" />
              <x-adminlte-input name="software" label="Software" fgroup-class="col-md-6" value="{{ old('software') }}" />
              <x-adminlte-input name="invoice" label="Invoice *" fgroup-class="col-md-6" value="{{ old('invoice') }}" />
              <x-adminlte-input name="price" label="Price *" fgroup-class="col-md-6" value="{{ old('price') }}" />
              <x-adminlte-input name="purchased_on" label="Purchased On *" fgroup-class="col-md-6" type="date" value="{{ old('purchased_on') }}" />
              <x-adminlte-select name="userinfo_id" label="Current User" fgroup-class="col-md-6" >
              
                <option value="">N/A</option>
                @foreach($usersinfos AS $item)
                  <option value="{{ $item->id }}" {{ old('userinfo_id')==$item->id?'selected':'' }}>{{ $item->name }}</option>
                @endforeach
              </x-adminlte-select>
              
          </div>
        </div>
        <div class="card-footer">
          <button type="Submit" class="btn btn-primary float-right">Submit</button>
          <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
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
