<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class UserController extends Controller
{
    public function registerView(){
        return view('register');
    }
    public function register(Request $request){
      $data =  $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
        ]);
        // $user=User::create([
        //     'name'=>$req->name,
        //     'email'=>$req->email,
        //     'password'=>$req->password,
        // ]);
         $user=User::create($data);
       if($user){
        return redirect()->route('login');
       }
    }
    public function  loginview(){
        return view('login');
    }
    public function login(Request $request){
    //    $credentials = $request->validate([
    //         'email'=>'required|email',
    //         'password'=>'required',
    //     ]);
      //  return $credentials;
       
        // if(Auth::attempt($credentials)){
        //     return redirect()->route('dashboard');
        // }
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
 //   }
    }
    public function dashboard(){
      //  return view('dashboard');
      if(Auth::check()){
        return view('dashboard');
      }else{
        return redirect()->route('login');
      }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
