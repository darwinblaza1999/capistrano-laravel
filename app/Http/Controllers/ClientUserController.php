<?php

namespace App\Http\Controllers;

use App\Models\ClientUser;
use Illuminate\Http\Request;

class ClientUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientUser  $clientUser
     * @return \Illuminate\Http\Response
     */
    public function show(ClientUser $clientUser)
    {
        return view('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientUser  $clientUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientUser $clientUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientUser  $clientUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientUser $clientUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientUser  $clientUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientUser $clientUser)
    {
        //
    }
   
}
