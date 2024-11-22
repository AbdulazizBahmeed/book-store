<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function index()
    {
        return view('auth');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->safe()->all();

        $user = User::create($data);
        Auth::login($user);
        
        return redirect()->route('index');
    }
    
    public function login(LoginRequest $request)
    {
        $data = $request->safe()->all();

        $user = Auth::attempt($data);
        if($user){
            return redirect()->route('index');
        } else {
            return redirect()->back()->with('error', 'You have entered an invalid email or password');
        }
        
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect()->route('index');
    }
}
