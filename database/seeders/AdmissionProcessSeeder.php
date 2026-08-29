<?php

namespace Database\Seeders;

use App\Models\AdmissionProcess;
use Illuminate\Database\Seeder;

class AdmissionProcessSeeder extends Seeder
{
    public function run(): void
    {
        AdmissionProcess::updateOrCreate(
            ['year' => '2026'],
            [
                'active' => true,
                'badge_dates' => 'Del 19/08/25 al 19/09/25',
                'anexo_conformidad_url' => 'files/ANEXO_CONFORMIDAD_ADMISION_2026.pdf',
                'ficha_inscripcion_url' => 'files/FICHA-DE-INSCRIPCION-2026-1o-PRIM-5o-SEC.pdf',
                'contrato_prestacion_url' => 'files/ContratoPrestaciónServicios2026.pdf',
                'ficha_postulante_url' => 'files/FICHA-DEL-POSTULANTE-2026.pdf',
                'disposiciones_pdf_url' => null,
            ]
        );
    }
}
