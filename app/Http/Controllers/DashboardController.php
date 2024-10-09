<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');  // Asegúrate de que la vista esté correctamente conectada.
    }

    
}
