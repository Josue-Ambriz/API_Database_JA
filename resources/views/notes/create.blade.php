@extends('adminlte::page')

@section('title', 'Add New Note')

@section('content_header')
    <h1>Add New Note</h1>
@stop

@section('content')
<form method="post" action="{{ route('notes.store') }}" >
    @csrf
    <x-adminlte-input name="note" label="Note" />
    <x-adminlte-input name="purchase_id" label="Purchase ID" />
    <x-adminlte-input name="service" label="Service" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop


@section('content_header')
    <h1>{{ $hardware->manufacturer->name }} - {{ $hardware->name }}</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Details</h3>
      </div>
      <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> Hardware Specs</strong>
        <p class="text-muted">
          CPU: {{ $hardware->CPU }}<br>
          RAM: {{ $hardware->RAM }}<br>
          Storage{{ $equipment->storage }}
        </p>
        <hr>
        <strong><i class="far fa-file-alt mr-1"></i> Purchase Info</strong>
        <p class="text-muted">
          Invoice#: {{ $equipment->invoice_number }}<br>
          Price: $ {{ $equipment->price }}<br>
          Purchase Date: {{ $equipment->purchase_date }}
        </p>
      </div>
      <div class="card-footer">
        <a class="btn btn-success btn-block" href="{{ route('equipment.edit',['equipment'=>$equipment]) }}">Edit</a>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="card card-warning">
      <form action="{{ route('notes.store',['equipment'=>$equipment->id]) }}" method="POST">
        <div class="card-header">
          <h3 class="card-title">Add a note</h3>
        </div>
        <div class="card-body">
          @csrf
          <x-adminlte-input name="subject" type="text" placeholder="subject"/>
          <x-adminlte-textarea name="content" placeholder="Content ..."/>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>

  </div>

</div>
@stop

@section('css')

@stop

@section('js')
    <script>
    $(document).ready(function() {
      $('.table').DataTable({
        "paging":   false,
        "info":     false,
        "searching": false
      });
    });
    </script>
@stop
