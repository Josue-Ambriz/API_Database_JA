@extends('adminlte::page')

@section('title', 'Edit User Information')

@section('content_header')
  <h1>Edit User Information</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{ route('usersinfos.update',['userinfo'=>$userinfo]) }}" method="POST">
      <div class="card">
        <div class="card-header p-2">
          <h3 class="card-title">User Information</h3>
        </div>
        <div class="card-body">
          @csrf
          <input type="hidden" name="_method" value="PUT" />
          <div class="row">
              <x-adminlte-input name="first_name" label="First Name" fgroup-class="col-md-12" value="{{ old('first_name')?:$userinfo->first_name }}" />
              <x-adminlte-input name="last_name" label="Last Name" fgroup-class="col-md-12" value="{{ old('last_name')?:$userinfo->last_name }}" />
              <x-adminlte-input name="email" label="Email" fgroup-class="col-md-12" value="{{ old('email')?:$userinfo->email }}" />
              <x-adminlte-input name="phone" label="Phone" fgroup-class="col-md-12" value="{{ old('phone')?:$userinfo->phone }}" />
          </div>
        </div>
        <div class="card-footer">
          <button type="Submit" class="btn btn-primary float-right">Submit</button>
          <a href="{{ route('usersinfos.show',['userinfo'=>$userinfo]) }}" class="btn btn-danger">Cancel</a>
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
