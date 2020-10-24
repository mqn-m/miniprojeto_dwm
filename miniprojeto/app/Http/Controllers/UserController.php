<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    // function lista(){
    //     return User:: all();
    // }

    public function create(){
        return view('users.novo');
    }

    public function store(){

        request()->validate([
            'nome' => 'required',
            'email' => 'required',
            'pass' => 'required',
            'idade' => 'required',
            'peso' => 'required'
        ]);

        $users = new User();

        $users->nome = request('nome');
        $users->email = request('email');
        $users->pass = request('pass');
        $users->idade = request('idade');
        $users->peso = request('peso');

        $users->save();

        return redirect('/users');
        
    }

    // public function edit($id){
        
    //     $users = User::find($id);

    //     return view('user.edit', compact('user'));
    // }

    // public function update($id){
        
    //     request()->validate([
    //         'nome' => 'required',
    //         'email' => 'required',
    //         'pass' => 'required',
    //         'idade' => 'required',
    //         'peso' => 'required'
    //     ]);


    //     $users = User::find($id);

    //     $users->nome = request('nome');
    //     $users->email = request('email');
    //     $users->pass = request('pass');
    //     $users->idade = request('idade');
    //     $users->peso = request('peso');

    //     $users->save();

    //     return redirect('/user' . $users->id);
        
    // }


}


