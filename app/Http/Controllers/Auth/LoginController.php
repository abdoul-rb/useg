<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:4']
        ]);

        $credentials = $request->only('email', 'password');

        if (!auth()->attempt($credentials, $request->remember_me)) {
            return back()->withErrors([
                'email' => __('Informations d\'identification, email ou mot de passe invalides.'),
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.profile.index'));
    }
}
