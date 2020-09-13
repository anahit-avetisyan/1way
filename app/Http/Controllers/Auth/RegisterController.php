<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array   $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function register(Request $request)
    {   $fff = [];
        $ggg=User::get("email");


        for ($i=0;$i<count($ggg);$i++){
            ($ggg[$i]->email);
            array_push($fff,$ggg[$i]->email);
        }
//        dd($fff);
//        dd($fff);
        $ooo=false;
        for ($i=0;$i<count($fff);$i++){
            if($request->email == $fff[$i]){
                $ooo = true;
                return redirect()->back()->with(session()->flash('alert-danger', 'Տվյալ Email-ով օգտատեր գոյություն ունի։ Խնդրում ենք նշել մեկ այլ E-Mail '));
            }
        }

        if($ooo == false){
                    $user = new User();
        $user->name = $request->name;
        $user->xanut = $request->xanut;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verification_code = sha1(time());
        $user->save();

        if($user != null){
            MailController::sendSignupEmail($user->name, $user->email, $user->verification_code);
            return redirect()->back()->with(session()->flash('alert-success', 'Ձեր անձնական էջը ստեղծված է,ակտիվացնելու համար անցնեք ձեր էլեկտրոնային փոստին ուղարկված հղումով'));
        }

        return redirect()->back()->with(session()->flash('alert-danger', ''));
        }
    }



    public function verifyUser(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user != null){
            $user->is_verified = 1;
            $user->save();
            $curse=0;
            return redirect()->route('login.login',$curse)->with(session()->flash('alert-success', 'Դուք հաջողությամբ գրանցված էք , Ձեր էջ մուտք գործելու համար մուտքագրեք ձել էլ․փոստը և գաղտնաբառը !'));
        }
        $curse=0;
        return redirect()->route('login.login',$curse)->with(session()->flash('alert-danger', 'Ոչ ակտիվ վերիֆիկաթիոն կոդ!'));
    }
}
