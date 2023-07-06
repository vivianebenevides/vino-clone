<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('auth.login');
    }

    public function accueil()
    {
         return view('index');
    }

    public function authentification(Request $request)
    {
        $infoConnexion = $request->only('email', 'password');
        if (!Auth::validate($infoConnexion)) {
            return redirect()->back();
        }
        $user = Auth::getProvider()->retrieveByCredentials($infoConnexion);
        Auth::login($user);
        return redirect(route('index'));
    }


    public function deconnexion(){
         Auth::logout();
        return redirect(route('login'));
    }

 
}
