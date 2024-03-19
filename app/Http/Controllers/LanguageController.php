<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switch(Request $request)
    {
    
     // Validate the request
     $request->validate([
        'locale' => 'required|in:en,fr', // Ensure only 'en' or 'fr' locales are allowed
    ]);

    // Set the application locale based on user's selection
    App::setLocale($request->locale);

    // Store the locale in the session
    session(['locale' => $request->locale]);

    // Log the locale change
    \Log::info('Locale switched to: ' . $request->locale);

    // Check if the request is an AJAX request
    if ($request->ajax()) {
        // If it's an AJAX request, return a JSON response indicating success
        return response()->json(['success' => true]);
    } else {
        // If it's not an AJAX request, redirect back to the previous page or any desired page
        return redirect()->back();
    }
    
    }
}
