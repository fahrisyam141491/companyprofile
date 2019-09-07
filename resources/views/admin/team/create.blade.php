@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
<form method="POST" action="{{route('saveTeam')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jabatan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jabatan" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
@endsection 