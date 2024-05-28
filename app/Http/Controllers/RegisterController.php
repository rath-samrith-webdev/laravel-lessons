<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UserRequest $request)
    {
        $user=User::create($request->validated());
        return response()->json([
            'message'=>'User created successfully',
            'user'=>$user
        ]);
    }
}
