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
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="birth" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Jabatan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="position" required>
  </div>
  <textarea id="post_regulasi" name="pic" class="input-block-level ckeditor" rows="10" placeholder="Masukkan Foto"></textarea>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script type="text/javascript">
  CKEDITOR.replace( 'messageArea',
  {
    customConfig : 'config.js',
    toolbar : 'simple'
  })
</script>  
@endsection 
