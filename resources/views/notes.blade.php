@extends('adminlte::page')

@section('title', 'Notes List')

@section('content_header')
    <h1>Notes List</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Note</th><th>Hardware ID</th><th>Service</th>
        </tr>
      </thead>
      <tbody>

        @foreach($notes AS $note)
        <tr>
          <td>{{ $note->id }}</td>
          <td>{{ $note->note }}</td>
          <td>{{ $note->hardware_id }}</td>
          <td>{{ $note->service }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('notes.show',['note'=>$note->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('notes.create') }} " class="btn btn-primary" >Add</a>
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
