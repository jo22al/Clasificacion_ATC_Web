<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SettingsRequest;
use App\Models\User;

class SettingsController extends Controller
{
    public function settings(){

        $users = User::latest()->get();

        $user = $users[0];

        return view('admin.settings.index', [
            'user' => $user
        ]);
    }

    public function update(SettingsRequest $request, User $user){

        $user->update( $request->all() );

        $user['password'] = bcrypt($user['password']);
        $user->save();

        return back()->with('status', 'Configuraciones Guardadas');
    }
}
