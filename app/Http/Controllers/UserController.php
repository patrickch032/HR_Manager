<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(){
        return view('index');
    }

    public function homeView(){
        return view('home');
    }

    public function register(){
        return view('register');
    }

    public function auth(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => "Email é obrigatório",
            'password.required' => "Senha é obrigatória"
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return view('home');
        }else{
            return redirect()->back()->with('danger','Email ou senha inválida');
        }
    }

    public function reg(Request $req){
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        return redirect('register');
    }


}






