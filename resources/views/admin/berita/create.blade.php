@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
<form method="POST" action="{{route('saveBerita')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="judul" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Isi</label>
    <textarea class="form-control" name="isi" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
@endsection 