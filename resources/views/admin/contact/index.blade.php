@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
	<a href="{{route('adminCreateContact')}}" class="btn btn-primary">Tambah Data</a>
	<br>
	<br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($result as $key => $value)
    <tr>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->message}}</td>
      <td>
      	<a href="{{route('adminEditContact',$value->id)}}" class="btn btn-warning btn-sm">Ubah</a>
      	<a href="{{route('adminDeleteContact',$value->id)}}" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection