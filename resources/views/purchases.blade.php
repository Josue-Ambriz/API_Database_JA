@extends('adminlte::page')

@section('title', 'Purchases')

@section('content_header')
    <h1>Purchases</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Invoice</th><th>Price</th><th>Hardware ID</th><th>User ID</th><th>Purchased On</th>
        </tr>
      </thead>
      <tbody>

        @foreach($purchases AS $purchase)
        <tr>
          <td>{{ $manufacturer->id }}</td>
          <td>{{ $manufacturer->company }}</td>
          <td>{{ $manufacturer->sales_email }}</td>
          <td>{{ $manufacturer->sales_number }}</td>
          <td>{{ $manufacturer->tech_email }}</td>
          <td>{{ $manufacturer->tech_number }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('purchases.show',['purchase'=>$purchase->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('purchases.create') }} " class="btn btn-primary" >Add</a>
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
