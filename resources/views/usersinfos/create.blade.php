@extends('adminlte::page')

@section('title', 'Add New User')

@section('content_header')
    <h1>Add New User</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ route('usersinfos.store') }}" method="POST">
      <div class="card">
        <div class="card-header p-2">
          <h3 class="card-title">User Information</h3>
        </div>
        <div class="card-body">
          @csrf
          <div class="row">
              <x-adminlte-input name="name" label="First Name" fgroup-class="col-md-12" />
              <x-adminlte-input name="name" label="Last Name" fgroup-class="col-md-12" />
              <x-adminlte-input name="name" label="Email" fgroup-class="col-md-12" />
              <x-adminlte-input name="email" label="Phone" fgroup-class="col-md-12" />
          </div>
        </div>
        <div class="card-footer">
          <button type="Submit" class="btn btn-primary float-right">Submit</button>
          <a href="{{ route('usersinfos.index') }}" class="btn btn-danger">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>
@stop


@section('js')
    <script>
    </script>
@stop
