<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'logout']);
    }

    public function postLogin(Request $request)
    {
        $attributes = $request->only('email', 'password');
        $field = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $login = Auth::attempt(array(
            $field   => $attributes['email'],
            'password'  => $attributes['password'],
        ));

        if ($login) {
            return response()->json([
                    'status' => true,
                    'name' => Auth::user()->name,
                ]
            );
        }

        return response()->json([
                'status' => false,
                'message' => 'Login error',
            ]
        );
    }

    public function postLogout()
    {
        Auth::logout();

        return response()->json([
                'status' => true
            ]
        );
    }
}
