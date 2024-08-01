<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            $user = Auth::user();
            $token = $request->user()->createToken('api-token')->plainTextToken;
            return response()->json([
                'status' => true,
                'toke' => $token,
                'user' => $user,            
            ],201);
        }
        /*
        $user = User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return response()->json(['user' => $user]);
        */
    }
    
    public function logout()
    {
        
    }
}
