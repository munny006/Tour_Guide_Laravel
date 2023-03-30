<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
public function redirectToProvider()
{
    Socialite::driver('google')->stateless()->redirect();

}
public function handleProviderCallback()
{
    $user = Socialite::driver('google')->stateless()->user();
    $authUser =User::where('email',$user->email)->first();
    if($authUser){
        Auth::login($authUser);
        return redirect()->route('home');
    }
    else{
        $newUser =new User();
        $newUser->email = $user->email;
        $newUser->user_id = $user->user_id;
        $newUser->password= uniqid();
    }

    return $user->token;
}

}
