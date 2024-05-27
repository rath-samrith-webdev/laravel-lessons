<?php

namespace App\Http\Controllers\Auth;

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
        $user=User::where('email',$request->email)->first(); //Select one user that has the same email
        if(!$user || !Hash::check($request->password,$user->password)){ //Check if the user's password is matched with the request password
            throw ValidationException::withMessages(
                [
                    'email' => ['The provided credentials are incorrect.'],
                ]
            );
        }else{
            return response()->json([
                'success'=>true,
                'status'=>200,
                'message'=>'You are logged in successfully',
                'data'=>$user
            ]);
        }
    }
}
