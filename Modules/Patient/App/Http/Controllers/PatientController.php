<?php

namespace Modules\Patient\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('patient::index');
    }

    public function booking()
    {
        return view('patient::booking');
    }
    public function reception()
    {
        return view('patient::reception');
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function myPayment()
    {
        return view('patient::my_payment');
    }
    
    public function myProfile()
    {
        return view('patient::my_profile');
    }
    public function labResults()
    {
        return view('patient::my_lab_results');
    }
    public function myPrescription()
    {
        return view('patient::my_prescription');
    }
    public function changeMyPassword()
    {
        return view('patient::change_Password');
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
        return view('patient::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('patient::edit');
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
