@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
<form method="POST" action="{{route('adminUpdateService',$result->id)}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul" value="{{$result->judul}}" required>
  </div>
  <textarea id="post_regulasi" name="isi" class="input-block-level ckeditor" rows="10" placeholder="Masukan Tracking Regulasi">{{$result->isi}}</textarea>
  <br>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
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