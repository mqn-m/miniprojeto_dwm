<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // function lista(){
    //     return User:: all();
    // }

    
    public function show(User $user)
    {
        return view('auth.info', ['user' => $user]);
    }


    public function edit(User $user){

        return view('auth.perfil', ['user' => $user]);
    }

    public function update($id){
        
        $user = User::find($id);

        $user->name = request('name');
        $user->email = request('email');
        $user->idade = request('idade');
        $user->peso = request('peso');

        $user->save();

        return redirect('/perfil');
        
    }

    public function destroy(User $user){
        
        $user->delete();
        return redirect('/');

    }


}


