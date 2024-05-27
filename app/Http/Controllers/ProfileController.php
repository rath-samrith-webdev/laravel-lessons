<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfileResource;
use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProfileResource::collection(Profile::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        $data = $request->validated();
        $image = $request->image; //get the image from the request
        $extension = $image->getClientOriginalExtension(); //get the extension from the request
        $imgName=time().'.'.$extension; // add a new name to the image
        $image->move(public_path('/').'upload/', $imgName); // move image to upload folder
        $data['image']=$imgName; //change image name
        Profile::create($data);
        return response()->json([$data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return $profile;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $profile->update($request->validated());
        return $profile;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
    }
}
