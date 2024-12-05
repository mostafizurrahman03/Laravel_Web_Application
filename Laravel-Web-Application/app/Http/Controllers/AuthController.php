<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login successful
            return redirect()->route('dashboard');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if ($user) {
            if (!Auth::validate(['email' => $user->email, 'password' => $credentials['password']])) {
                // Incorrect password
                throw ValidationException::withMessages([
                    'password' => trans('auth.password_incorrect'),
                ])->redirectTo(route('login'));
            }
        } else {
            // Incorrect email
            throw ValidationException::withMessages([
                'email' => trans('auth.email_incorrect'),
            ])->redirectTo(route('login'));
        }

        // General failure
        throw ValidationException::withMessages([
            'failed' => trans('auth.failed'),
        ])->redirectTo(route('login'));
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    
    public function showRegistration()
    {
        return view('auth.registration');
    }

    
    public function signup(Request $request)
    {
        if($request->password == $request->confirm_password){
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
           
            return redirect()->route('dashboard')->with('message', 'User created successfully');
        }else{
            return back()->with("message", "Password doesn't matches");
        }
    }
}
