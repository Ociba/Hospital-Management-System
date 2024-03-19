<?php

namespace Modules\SwitchLanguage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class SwitchLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        // Redirect back to the previous page or any desired page
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('switchlanguage::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('switchlanguage::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('switchlanguage::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
