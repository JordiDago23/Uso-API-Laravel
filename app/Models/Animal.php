<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dueno;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animales';
    protected $primaryKey = 'id_animal';

    protected $fillable = [
        'nombre',
        'tipo',
        'peso',
        'enfermedad',
        'comentarios',
        'dueno',
    ];

    // 🔗 RELACIÓN
    public function dueno()
    {
        return $this->belongsTo(Dueno::class, 'dueno', 'id_persona');
    }
}
