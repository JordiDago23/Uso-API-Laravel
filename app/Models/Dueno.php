<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Dueno extends Model
{
    use HasFactory;

    protected $table = 'duenos';
    protected $primaryKey = 'id_persona';

    protected $fillable = [
        'nombre',
        'apellido',
    ];
    
}
