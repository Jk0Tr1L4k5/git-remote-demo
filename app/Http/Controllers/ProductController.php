<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
      
      
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'tgl_post' => 'required',
            'gambar' => 'required',
            'isi' => 'required',
            'ket' => 'required',
            'keyword' => 'required',
        ]);
        

        // Product::create($request->all());
       
        return redirect()->route('products.index')
                        ->with('success','produk berhasil di tambah.');
    }

    
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));  
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'tgl_post' => 'required',
            'gambar' => 'required',
            'isi' => 'required',
            'ket' => 'required',
            'keyword' => 'required',
        ]);
        
        // $product->update($request->all());
        return redirect()->route('products.index')
                        ->with('success','Produk Berhasil Diubah');
    }

    public function destroy(Product $product)
    {
        $product->delete();
       
        return redirect()->route('products.index')
                        ->with('success','Product Berhasil di hapus');
    }
}
