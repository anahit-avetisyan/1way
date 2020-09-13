<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handelProviderCallback()
    {
        $user= Socialite::driver("google")->stateless()->user();
        if ($user){
            $utente = User::where("idgoogle",$user->getId())->first();

            if(!$utente){
                $utente= new User();
                $utente ->name = $user->getName();
                $utente ->email = $user->getEmail();
                $utente ->idgoogle = $user->getId();
                $utente->save();
            }
            Auth::login($utente);
            $curse=0;
        }
        return redirect()->route("AM.index",compact("curse"));
    }
}
