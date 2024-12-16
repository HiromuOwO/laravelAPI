<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nudi extends Model
{
    use HasFactory;
    protected $table = 'nudi';

    protected $fillable = [
        'nombre',
        'tamaño',
        'sociabilidad',
        'dieta',
        'imagen'

    ];

}
