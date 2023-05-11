<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public $table = "products";

    protected $fillable = [
        'id', 'judul', 'tgl_post', 'gambar', 'isi', 'ket','keyword'
    ];
}
