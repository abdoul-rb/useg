<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('dashboard.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users,email,' . $request->user()->id],
        ]);

        $request->user()->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.profile.index')->with(
            'success',
            'Le profil a été mis à jour avec succès'
        );
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $request->user()->update([
            'password' => $request->password
        ]);

        return redirect()->route('dashboard.profile.index')->with(
            'success',
            'Votre mot de passe a été mis à jour avec succès'
        );
    }

    public function deleteAccount(Request $request)
    {
        if (!auth()->check()) {
            abort(401);
        }

        $request->user()->delete();

        return redirect()->route('home')->with(
            'success',
            'Votre compte a été supprimé avec succès'
        );
    }
}
