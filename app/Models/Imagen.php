<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'imagen';

    protected $fillable = ['url', 'estado'];

    public function producto()
    {
        return $this->hasMany(Producto::class,'id');
    }
}
