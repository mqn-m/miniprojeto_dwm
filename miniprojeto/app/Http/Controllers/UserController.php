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

    public function welcome(){
        if(Auth::check() == true){
            dd(Auth::user());
            return view('welcome');

        }else
        return redirect('auth/login');
        

    }

    public function showlogin(){
        return view('auth/login');
    }

    public function checklogin(Request $request){
        var_dump($request->all());
        $credentials = [
            'email' => $request->email,
            'pass' => $request->pass

        ];

        if(Auth::attempt($credentials)){
            return redirect('usersace');
        }
        return redirect()->back()->withInput()->withErrors(['Credenciais erradas']);
    }

    public function create(){
        return view('auth.register');
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

        return redirect('/');
        
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


