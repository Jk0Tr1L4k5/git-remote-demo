@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Produk</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id</strong>
                <input type="text" name="id" class="form-control" placeholder="id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>judul</strong>
                <input type="text" name="judul" class="form-control" placeholder="judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tgl_post</strong>
                <input type="date" name="tgl_post" class="form-control" placeholder="tgl_post">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>isi</strong>
                <input type="text" name="isi" class="form-control" placeholder="isi">
            </div>
        </div>  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ket</strong>
                <input type="text" name="ket" class="form-control" placeholder="ket">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>keyword</strong>
                <input type="text" name="keyword" class="form-control" placeholder="keyword">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gambar</strong>
                <img class="img-preview img-fluid">
            <input type="file" name="gambar " id="gambar" class="form-control" accept="image/*" onchange="document.getElementById('output').src = 
            window.URL.createObjekURL(this.files[0])" onchange="previewImage">
            </div>
        </div>
     <div class="col-xs-12 col-sm-12 col-md-12 text-center">
       <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
 