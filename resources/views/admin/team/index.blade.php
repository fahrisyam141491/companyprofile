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
      <th scope="col">Jawaban</th>
      <th scope="col">Dibuat Oleh</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($result as $key => $value)
    <tr>
      <td>{{$value->nama}}</td>
      <td>{{$value->jabatan}}</td>
      <td>{{ \App\User::where('id',$value->created_by)->value('name') }}</td>
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