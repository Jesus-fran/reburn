<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Accesos;

class LoginController extends Controller
{
    //
    public function show()
    {
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        
        if(!Auth::validate($credentials)):
            // dd('error');
           return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user) 
    {

        $acceso = new Accesos();

        $acceso->fechahora = now();
        $acceso->user = $user->username;
        $acceso->ip = $request->ip();
        $acceso->save();

        if (auth()->user()->username == 'admin') {
            return redirect()->route('administracion');   
        }

        return redirect()->route('/');
    }
}
