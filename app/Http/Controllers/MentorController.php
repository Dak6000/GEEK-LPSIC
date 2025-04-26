<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    public function create()
    {
        // Vérifier si l'utilisateur est déjà un mentor
        $mentor = Mentor::where('email', Auth::user()->email)->first();
        if ($mentor) {
            return redirect()->route('mentors')->with('info', 'Vous êtes déjà un mentor.');
        }
        return view('mentor-registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:mentors',
            'phone' => 'required|string|max:20',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'specialties' => 'required|string',
            'experience' => 'required|string',
            'mentoring_approach' => 'required|string',
            'availability' => 'required|array',
            'hours' => 'required|string',
            'hourly_rate' => 'required|numeric|min:0'
        ]);

        // Vérifier que l'email correspond à l'utilisateur connecté
        if ($request->email !== Auth::user()->email) {
            return back()->with('error', 'L\'email doit correspondre à votre compte utilisateur.');
        }

        $data = $request->all();

        // Gestion de l'upload de l'image
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('mentors', 'public');
            $data['profile_image'] = $imagePath;
        }

        // Création du mentor
        $mentor = Mentor::create($data);

        return redirect()->route('mentor.success')->with('success', 'Votre candidature a été soumise avec succès !');
    }

    public function success()
    {
        return view('mentor-success');
    }
} 