<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $address)
    {
        //
    }
}
