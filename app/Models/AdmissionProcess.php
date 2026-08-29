<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionProcess extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'active',
        'badge_dates',
        'anexo_conformidad_url',
        'ficha_inscripcion_url',
        'contrato_prestacion_url',
        'ficha_postulante_url',
        'disposiciones_pdf_url',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }
}
