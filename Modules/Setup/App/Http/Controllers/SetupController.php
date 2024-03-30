<?php

namespace Modules\Setup\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function userType()
    {
        return view('setup::user_type');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setup::create');
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
        return view('setup::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('setup::edit');
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
    public function logoutUser()
    {
        Auth::logout();

        return redirect('/');
    }
    public function department(){
        return view('setup::department');
    } 
    public function service(){
        return view('setup::service');
    }
    public function changePassword(){
        return view('setup::change_password');
    }
}
