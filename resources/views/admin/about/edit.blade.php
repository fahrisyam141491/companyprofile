@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
<form method="POST" action="{{route('adminUpdateAbout',$result->id)}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="judul" value="{{$result->judul}}" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Isi</label>
    <textarea class="form-control" name="isi" required>{{$result->isi}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
@endsection 