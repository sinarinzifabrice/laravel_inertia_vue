<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        sleep(1);
        //validate the request
        $userprofile = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);
         
        //dd('passed');
        //Register the user
        $user = User::create($userprofile);

        // //Login the user
        Auth::login($user);

        // //
        // // Redirect to the home page
        return redirect()->route('home');
    }
}
