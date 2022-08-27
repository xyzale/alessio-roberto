<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $id = Auth::id();
        $user = User::find($id);

        return view('dashboard',['user' => $user]);
    }
    
    public function edit(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');

        $id = Auth::id();
        $user = User::find($id);

        $user->name = $name;
        $user->email = $email;
        $user->save();

        return redirect()->to('/dashboard')->with(['message' => 'Utente aggiornato con successo']);
    }
    public function cancella(Request $request, $id) {

        $user = User::find($id);
        $user->delete();

        return redirect()->to('/dashboard')->with(['message' => 'Utente cancellato con successo']);
    }
}