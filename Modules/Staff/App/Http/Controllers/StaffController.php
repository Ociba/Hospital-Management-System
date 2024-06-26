<?php

namespace Modules\Staff\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('staff::index');
    }
    public function supportStaff(){
        return view('staff::support_staff');
    }
    public function dashboard(){
        return view('staff::dashboard');
    }
    public function profile(){
        return view('staff::profile');
    }
    public function stock(){
        return view('staff::stock');
    }
    public function treatment(){
        return view('staff::treatment');
    }
    public function todaysPatient(){
        return view('staff::today_patients');
    } 
    public function allPatients(){
        return view('staff::patient');
    }

    public function results(){
        return view('staff::results');
    }

    public function prescription(){
        return view('staff::prescription');
    }

    public function changePassword(){
        return view('staff::change_password');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff::create');
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
        return view('staff::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('staff::edit');
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
