<?php

namespace Modules\ConsultationRoom\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConsultationRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function general()
    {
        return view('consultationroom::general');
    }
    public function special()
    {
        return view('consultationroom::special');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consultationroom::create');
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
        return view('consultationroom::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('consultationroom::edit');
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
