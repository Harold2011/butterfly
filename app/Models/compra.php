<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    protected $table = 'compra';
    protected $fillable = ['user_id', 'producto_id', 'nombre', 'descripcion', 'talla', 'estado'];
    protected $primaryKey = 'id';
}
