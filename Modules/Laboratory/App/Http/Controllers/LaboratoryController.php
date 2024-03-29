<?php

namespace Modules\Laboratory\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function stock()
    {
        return view('laboratory::stock');
    }
    public function patientResults()
    {
        return view('laboratory::patient_result');
    }
    public function stockUsage()
    {
        return view('laboratory::stock_usage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laboratory::create');
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
        return view('laboratory::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('laboratory::edit');
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
