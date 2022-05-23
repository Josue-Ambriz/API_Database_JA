@extends('adminlte::page')

@section('title', 'Manufacturer Information')

@section('content_header')
    <h1>Manufacturer Information</h1>
@stop

@section('content')
    <h2>{{ $manufacturer->title; }}</h2>
    <div><p>{{ $manufacturer->company; }}</p></div>
    <div><p>{{ $manufacturer->sales_email; }}</p></div>
    <div><p>{{ $manufacturer->sales_number; }}</p></div>
    <div><p>{{ $manufacturer->tech_email; }}</p></div>
    <div><p>{{ $manufacturer->tech_number; }}</p></div>
    
    <h4>
        <div>
            <a href="{{route('manufacturers.edit', ['manufacturer'=>$manufacturer->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('manufacturers.destroy', ['manufacturer'=>$manufacturer->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop

@section('content_header')
    <a href="{{ route('equipment.create') }}" class="btn btn-success float-right"> + Add</a>
    <h1>{{ $manufacture->name }}</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Contact Info</h3>
      </div>
      <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> Sales</strong>
        <p class="text-muted">
          {{ $manufacture->sales_name }}<br>
          {{ $manufacture->sales_phone }}<br>
          {{ $manufacture->sales_email }}
        </p>
        <hr>
        <strong><i class="far fa-file-alt mr-1"></i> Tech Support</strong>
        <p class="text-muted">
          {{ $manufacture->techsupport_name }}<br>
          {{ $manufacture->techsupport_phone }}<br>
          {{ $manufacture->techsupport_email }}
        </p>
      </div>
      <div class="card-footer">
        <a class="btn btn-success btn-block" href="{{ route('manufactures.edit',['manufacture'=>$manufacture]) }}">Edit</a>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="card">
      <div class="card-header p-2">
        <h3 class="card-title">Equipment</h3>
      </div>
      <div class="card-body">
        <table id="hardware_table" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>Category</th>
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
                @foreach($manufacturer->hardware AS $item)
                <tr>
                    <td>{{ $item->hwcategory->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->CPU }}</td>
                    <td>{{ $item->RAM }}</td>
                    <td>{{ $item->storage }}</td>
                    <td>{{ $item->software }}</td>
                    <td>{{ $item->invoice }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->purchased_on }}</td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="{{ route('hardwares.show',['hardware'=>$item]) }}">View</a>
                      <form action="{{ route('hardwares.destroy',['hardware'=>$item]) }}" method="POST" >
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
