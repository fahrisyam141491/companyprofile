@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
  <a href="{{route('adminCreateAbout')}}" class="btn btn-primary">Tambah Data</a>
  <br>
  <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Dibuat Oleh</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($result as $key => $value)
    <tr>
      <td>{{$value->judul}}</td>
      <td>{{$value->isi}}</td>
      <td>{{ \App\User::where('id',$value->created_by)->value('name') }}</td>
      <td>
        <a href="{{route('adminEditAbout',$value->id)}}" class="btn btn-warning btn-sm">Ubah</a>
        <a href="{{route('adminDeleteAbout',$value->id)}}" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection