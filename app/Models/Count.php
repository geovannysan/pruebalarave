<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'conteoventa';

    protected $fillable =[
        'id_producto',
        'counter',
    ];
   
        public function productos()
        {
            return $this->belongsTo(Producto::class, 'id_producto');
        }
    }
