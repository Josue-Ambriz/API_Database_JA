@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Name</th><th>Category</th><th>CPU</th><th>RAM</th><th>Storage</th><th>Service</th><th>Software</th><th>Price</th><th>Manufacturer</th>
        </tr>
      </thead>
      <tbody>

        @foreach($hardwares AS $hardware)
        <tr>
          <td>{{ $hardware->id }}</td>
          <td>{{ $hardware->name }}</td>
          <td>{{ $hardware->hwcategory_id }}</td>
          <td>{{ $hardware->cpu }}</td>
          <td>{{ $hardware->ram }}</td>
          <td>{{ $hardware->storage }}</td>
          <td>{{ $hardware->service }}</td>
          <td>{{ $hardware->software }}</td>
          <td>{{ $hardware->price }}</td>
          <td>{{ $hardware->manufacturer_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('hardwares.create') }} " class="btn btn-primary" >Add</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop


