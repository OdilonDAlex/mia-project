<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\RegisterFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RegisterUserController extends Controller
{
    

    public function register() {
        return view('guest.register');
    }

    public function store(RegisterFormRequest $request) {

        if($request['confirm-password'] !== $request['password']){
            throw ValidationException::withMessages([
                'password' => 'mot de passe', 
            ]);
        }

        $credentias = $request->validated();

        $user = User::create([
            'name' => $credentias['name'],
            'firstname' => $credentias['firstname'],
            'email' => $credentias['email'],
            'password' => Hash::make($credentias['password'])
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('home')
            ->with('new_user', 'Bienvenue ' . $user->name);
    }
}
