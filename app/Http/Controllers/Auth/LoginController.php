<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            $user = auth()->user();

            if ($user->is_lock == 0) {
                if ($user->role == 1) {

                    if($user->is_delete == 0){
                        return redirect()->route('superadmin.dashboards');
                    }else{
                        return redirect()->route('login')->with('error', 'Please enter correct login credentials');
                    }
                } elseif ($user->role == 2 ) {

                    if($user->is_delete == 0){
                        return redirect()->route('admin.dashboards');
                    }else{
                        return redirect()->route('login')->with('error', 'Please enter correct login credentials');
                    }
                }
            } else {
                return redirect()->route('login')->with('error', 'Your account is locked.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please enter correct login credentials');
        }
    }

}
