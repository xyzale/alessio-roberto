<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $email = $request->get('email');
        $password = $request->get('password');

        $authenticated = Auth::attempt([
            'email' => $email,
            'password' => $password
        ]);

        if ($authenticated) {
            // Authentication passed...
            return redirect()->to('dashboard');
        }

        return redirect()->to('/')->with(['error' => 'Utente non riconosciuto']);
    }
}
