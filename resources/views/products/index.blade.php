@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>RENTAL ABC</h2>
            </div>        
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-dark table-hover"> 
         <tr>
            <th>id</th>
            <th>judul</th>
            <th>tgl_post</th>
            <th>gambar</th>
            <th>isi</th>
            <th>ket</th>
            <th>keyword</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->judul }}</td>
            <td>{{ $product->tgl_post }}</td>
            <td>{{ $product->isi }}</td>
            <td>{{ $product->ket }}</td>
            <td>{{ $product->keyword }}</td>
            <td><a href="{{ asset ('uploads/images/'.$product->gambar)}}">
                <img src="{{ asset ('uploads/images/'.$product->gambar)}}" width="100px"></a></td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection