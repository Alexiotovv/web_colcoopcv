<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionProcess;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProcesos = AdmissionProcess::count();
        $procesoActivo = AdmissionProcess::where('active', true)->first();

        return view('admin.dashboard', compact('totalProcesos', 'procesoActivo'));
    }
}
