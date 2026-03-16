<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index ()
    {

        return view( 'login' );
    }

    /**
     * Handle an authentication attempt.
     */
    public function loginForm ( Request $oRequest ): RedirectResponse
    {

        $aCredentials = $oRequest->validate( [
            'email' => [ 'required' ],
            'password' => [ 'required' ],
        ] );

        if ( Auth::attempt( $aCredentials ) )
        {
            $oRequest->session()->regenerate();

            return redirect()->intended();
        }

        return back()->withErrors( [
            'email' => 'The provided credentials do not match our records.',
        ] )->onlyInput( 'email' );
    }
}
