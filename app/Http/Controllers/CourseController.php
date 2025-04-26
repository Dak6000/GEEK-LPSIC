<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function create()
    {
        return view('course-registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();

        // Gestion de l'upload de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public');
            $data['image'] = $imagePath;
        }

        // Création du cours
        $course = Course::create($data);

        return redirect()->route('course.success')->with('success', 'Votre cours a été soumis avec succès !');
    }

    public function success()
    {
        return view('course-success');
    }
} 