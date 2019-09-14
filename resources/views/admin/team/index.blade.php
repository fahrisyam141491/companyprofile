@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
	<a href="{{route('adminCreateTeam')}}" class="btn btn-primary">Tambah Data</a>
	<br>
	<br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Picture</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($result as $key => $value)
    <tr>
      <td>{{$value->name}}</td>
      <td>{{$value->birth}}</td>
      <td>{{$value->position}}</td>
      <td>{!! $value->pic !!}></td>
      <td>
      	<a href="{{route('adminEditTeam',$value->id)}}" class="btn btn-warning btn-sm">Ubah</a>
      	<a href="{{route('adminDeleteTeam',$value->id)}}" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection