<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(Auth()->user()->level == 1){
            return route('home1');
        }
        elseif(Auth()->user()->role == 2){
            return route('home2');
        }
        elseif (Auth()->user()->role == 3) {
            return route('home3');
        }
    }

    public function login(Request $request) {
        $input = $request->all();
        $this->validate($request,[
            // 'email' => 'required|email|exists:users,email',
            'password'=>'required'
        ],[
            'name.exists' => 'Username tidak terdaftar',

        ]);
        if(auth()->attempt(array('name'=>$input['name'], 'password'=> $input['password'])) ) {
            if(Auth()->user()->level == 1){
                return route('home1');
            }
            elseif(Auth()->user()->role == 2){
                return route('home2');
            }
            elseif (Auth()->user()->role == 3) {
                return route('home3');
            }
        }else {
            return redirect()->back()->with('error','Gagal login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
