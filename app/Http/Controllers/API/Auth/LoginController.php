<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $user=User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)) {
            throw ValidationException::withMessages(
                [
                    'email' => ['The provided credentials are incorrect.'],
                ]
            );
        }
        return response()->json([
            'success'=>true,
            'status'=>200,
            'message'=>'You are logged in successfully',
            'data'=>$user,
            'token'=>$user->createToken('my-app-token')->plainTextToken, //This will generate the token for user to access
        ]);
    }
}
