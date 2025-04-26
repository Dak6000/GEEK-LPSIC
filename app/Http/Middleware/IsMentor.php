<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\Auth;

class IsMentor
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $mentor = Mentor::where('email', Auth::user()->email)
                          ->where('status', 'approved')
                          ->first();
            if ($mentor) {
                return $next($request);
            }
        }
        
        return redirect()->route('mentors')->with('error', 'Vous devez être un mentor approuvé pour accéder à cette fonctionnalité.');
    }
} 