<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // L'envoi d'email est maintenant géré côté client avec EmailJS
        // Cette méthode est gardée pour la validation et la redirection

        return redirect()->route('contact.success')->with('success', 'Votre message a été envoyé avec succès !');
    }

    public function success()
    {
        return view('contact-success');
    }
} 