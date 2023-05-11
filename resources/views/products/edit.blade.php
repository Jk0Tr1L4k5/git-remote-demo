@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
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
  
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jenis_produk</strong>
            <select class="form-select" aria-label="Default select example" name="jenis_produk">
                <option selected>pilih jenis </option>
                <option {{$product->jenis_produk == 'mobil' ? 'selected' :''}} value="mobil">mobil</option>
                <option {{$product->jenis_produk == 'motor' ? 'selected' :''}} value="motor">motor</option>
              </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama_produk</strong>
                    <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>penyewan_produk</strong>
            <select class="form-select" aria-label="Default select example" name="Penyewaan">
                <option selected>pilih</option>
                <option {{$product->Penyewaan == '1hari' ? 'selected' :''}} value="1hari">1 hari</option>
                <option {{$product->Penyewaan == '2hari' ? 'selected' :''}} value="2hari">2 hari</option>
                <option {{$product->Penyewaan == '4hari' ? 'selected' :''}} value="4hari">4 hari</option>
                <option {{$product->Penyewaan == '6hari' ? 'selected' :''}} value="6hari">6 hari</option>
                <option {{$product->Penyewaan == '8hari' ? 'selected' :''}} value="8hari">8 hari</option>
                <option {{$product->Penyewaan == '9hari' ? 'selected' :''}} value="9hari">9 hari</option>
                <option {{$product->Penyewaan == '10hari' ? 'selected' :''}} value="10hari">10 hari</option>
                <option {{$product->Penyewaan == '12hari' ? 'selected' :''}} value="12hari">12 hari</option>
                <option {{$product->Penyewaan == '15hari' ? 'selected' :''}} value="15hari">15 hari</option>
                <option {{$product->Penyewaan == '17hari' ? 'selected' :''}} value="17hari">17 hari</option>
                <option {{$product->Penyewaan == '20hari' ? 'selected' :''}} value="20hari">20 hari</option>
                
              </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>harga_rental</strong>
                    <input type="text" name="harga_rental" value="{{ $product->harga_rental }}" class="form-control" placeholder="harga">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>foto_produk</strong>
                    <img class="img-preview img-fluid">
                <input type="file" name="foto_produk" id="foto_produk" class="form-control" accept="image/*" onchange="document.getElementById('output').src = 
                window.URL.createObjekURL(this.files[0])" onchange="previewImage">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection