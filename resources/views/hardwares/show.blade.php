@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Details</h3>
      </div>
      <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i>Hardware Information</strong>
        <p class="text-muted">
          CPU: {{ $hardware->CPU }}<br>
          RAM: {{ $hardware->memory }}<br>
          Storage: {{ $hardware->storage }}
          Software: {{ $hardware->software }}
        </p>
        <hr>
        <strong><i class="far fa-file-alt mr-1"></i>Purchase Infomation</strong>
        <p class="text-muted">
          Invoice: {{ $hardware->invoice }}<br>
          Price: $ {{ $hardware->price }}<br>
          Purchased On: {{ $hardware->purchased_on }}
        </p>
      </div>
      <div class="card-footer">
        <a class="btn btn-success btn-block" href="{{ route('hardwares.edit',['hardware'=>$hardware]) }}">Edit</a>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Notes</h3>
        <div class="card-tools">
        <a href="{{ route('notes.create',['hardware'=>$hardware->id]) }}" class="btn btn-tool" ><i class="fas fa-plus"></i> Add</a>
        </div>
      </div>
      <div class="card-body p-0">
        <table id="note_table" class="table table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Content</th>
                    <th>Create Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hardware->notes AS $note)
                <tr>
                    <td>{{ $note->note }}</td>
                    <td>{{ $note->service }}</td>
                    <td>
                      <a class="btn btn-primary btn-xs" href="{{ route('notes.edit',['note'=>$note->id]) }}">Edit</a>
                      <form action="{{ route('notes.destroy',['note'=>$note->id]) }}" method="POST" >
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

    <div class="card  card-primary">
      <div class="card-header">
        <h3 class="card-title">User Associated</h3>
      </div>
      <div class="card-body p-0">
        <table id="userinfo_table" class="table table-sm" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hardware->usersinfos AS $userinfo)
                <tr>
                    <td>{{ $userinfo->first_name }}</td>
                    <td>{{ $userinfo->last_name }}</td>
                    <td>{{ $userinfo->email }}</td>
                    <td>{{ $userinfo->phone }}</td>
                    <td><a class="btn btn-primary btn-xs" href="{{ route('usersinfos.show',['userinfo'=>$userinfo->id]) }}">View</td>
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
