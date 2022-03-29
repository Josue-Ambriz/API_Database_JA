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
    
    <h4><div><a href="{{route($n.'.edit', [(string)$m=>$res->id]) }}" class="btn btn-primary" >Edit</a>
        <form style="display:inline;" class="delete" action="{{route($n.'.destroy', [(string)$m=>$res->id])}}" method="post">
    @method('delete')
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete {{ $o; }}" class="btn btn-danger">
  </form>
</div></h4>
@stop

@section('js')
<script>
    $(".delete").on("submit", function(){
      return confirm("Are you sure?");
    });
</script>
    
@stop
