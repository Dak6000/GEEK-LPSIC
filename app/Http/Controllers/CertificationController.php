<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        return view('certifications');
    }

    public function show($id)
    {
        // Logique pour afficher une certification spécifique
        return view('certification.show', compact('id'));
    }

    public function start($id)
    {
        // Logique pour démarrer une certification
        return view('certification.start', compact('id'));
    }
} 