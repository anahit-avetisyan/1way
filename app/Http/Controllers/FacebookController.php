<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handelProviderCallback()
    {
        $user= Socialite::driver("facebook")->stateless()->user();
        if ($user){
            $utente = User::where("idfacebook",$user->getId())->first();

            if(!$utente){
                $utente= new User();
                $utente ->name = $user->getName();
                $utente ->email = $user->getEmail();
                $utente ->idfacebook = $user->getId();
                $utente->save();
            }
            Auth::login($utente);
            $curse=0;
        }
        return redirect()->route("AM.index",compact("curse"));
    }
}
