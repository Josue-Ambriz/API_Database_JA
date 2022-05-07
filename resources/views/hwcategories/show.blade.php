@extends('adminlte::page')

@section('title', 'Category Information')

@section('content_header')
    <a href="{{ route('hardwares.create') }}" class="btn btn-success float-right"> + Add</a>
    <h1>{{ $hwcategory->type }}</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header p-2">
        <h3 class="card-title">Hardware</h3>
      </div>
      <div class="card-body">
        <table id="hardware_table" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>Manufacture</th>
                    <th>Name</th>
                    <th>CPU</th>
                    <th>RAM</th>
                    <th>Storage</th>
                    <th>Software</th>
                    <th>Invoice</th>
                    <th>Price</th>
                    <th>Purchased On</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hwcategory->hardware AS $item)
                <tr>
                    <td>{{ $item->manufacture->type }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->CPU }}</td>
                    <td>{{ $item->memory }}</td>
                    <td>{{ $item->storage }}</td>
                    <td>{{ $item->invoice_number }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->purchase_date }}</td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="{{ route('hardwares.show',['hardwares'=>$item]) }}">View</a>
                      <form action="{{ route('hardwares.destroy',['hardwares'=>$item]) }}" method="POST" >
                        @csrf
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
    $(document).ready(function() {
      $('#hardware_table').DataTable();
    });
    </script>
@stop
