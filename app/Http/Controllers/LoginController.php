<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        if(!auth()->attempt($request->only(['email', 'password']))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }else{
            return response()->json([
                'success' => true,
                'message' => __('auth.success'),
                'user' => auth()->user(),
                'token' => auth()->user()->createToken('session-15')->plainTextToken,
            ]);
        }
    }
}
