<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey ='id';
    protected $table = 'producto';

   
    protected $fillable = [
        'cantidad',
        'descriptin',
        'nombre',
        'id'
    ];
    public function imagen()
    {
        return $this->belongsTo(ProductoImagen::class, 'id');
    }

}
