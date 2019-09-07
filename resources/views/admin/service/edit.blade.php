@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
<form method="POST" action="{{route('adminUpdateService',$result->id)}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Service 1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ser1" required value="{{$result->ser1}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Service 2</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ser2" required value="{{$result->ser2}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Service 3</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ser3" required value="{{$result->ser3}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Service 4</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ser4" required value="{{$result->ser4}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
@endsection 