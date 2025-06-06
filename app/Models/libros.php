<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $fillable = [
        'nombre',
        'descripcion',
        'autor',
    ];

    public $timestamps = false; 
}
