<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model
{
    protected $table = 'productoimagen';
    
   
    protected $fillable = [       
        'id_imagen',
        'id_producto',
        'id'
    ];

    public function imagen()
    {
        return $this->belongsTo(Imagen::class, 'id','id_imagen');
    }

    public function producto()
    {
        return $this->belongsTo(producto::class, 'id','id_producto');
    }
}
