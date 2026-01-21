<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Mostrar la página principal
     */
    public function index()
    {
        return view('pages.home');
    }
    
    /**
     * Mostrar página Nosotros
     */
    public function nosotros()
    {
        return view('pages.nosotros');
    }

    public function temarios()
    {
        return view('pages.temarios');
    }
    /**
     * Mostrar página Admisión
     */
    public function admision()
    {
        return view('pages.admision');
    }
    public function listaUtiles()
    {
        return view('pages.lista_utiles');
    }

    public function comunicados()
    {
        return view('pages.comunicados');
    }
    /**
     * Mostrar página Contacto
     */

    public function galerias()
    {
        return view('pages.galeria');
    }
    /**
     * Mostrar página Aula Virtual
     */
    public function aulaVirtual()
    {
        return view('aula-virtual');
    }
    
    /**
     * Mostrar página de Comunicados
     */

    
    /**
     * Mostrar detalle de un comunicado
     */
    public function comunicadoDetalle($id)
    {
        return view('pages.comunicados.detalle', ['id' => $id]);
    }
    
    /**
     * Mostrar página de Reclamaciones
     */
    public function reclamaciones()
    {
        return view('pages.reclamaciones');
    }
    
    /**
     * Mostrar página de documentos específicos
     */
    public function documentos($tipo)
    {
        // Puedes manejar diferentes tipos de documentos aquí
        $documentos = [
            'admision' => 'Admisión 2026',
            'contrato' => 'Contrato de Servicios 2026',
            'temarios' => 'Temarios 2026',
            'utiles' => 'Lista de Útiles 2026',
            'horarios' => 'Horarios de Clases',
            'calendario' => 'Calendario Académico',
            'reglamento' => 'Reglamento Interno',
            'actividades' => 'Actividades Extracurriculares'
        ];
        
        if (!array_key_exists($tipo, $documentos)) {
            abort(404);
        }
        
        return view('documentos.show', [
            'tipo' => $tipo,
            'titulo' => $documentos[$tipo]
        ]);
    }
}