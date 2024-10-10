<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class auth_controller extends Controller
{
    function register(Request $res){
        $result = "";
        if(isset($res->name))
        {
            $res->validate([
                "name"=>"required|min:3",
                "email"=>"required|email",
                "password"=>[
                 "required",
                 'min:6',
                 'regex:/[a-z]/',
                 'regex:/[A-Z]/',
                 'regex:/[0-9]/',
                 'regex:/[@#$%&*]/'
                ],
         ]);
            $u_id = rand(999999,000000);
           $result =  User::create([
                "name"=>$res->name,
                "email"=>$res->email,
                "password"=>$res->password,
                "u_id"=>$u_id,
            ]);
        }
        if($result){
            return redirect()->route('login');
        }else{
            return view("register");
        }
    }
    function login(Request $res){
        $error ="";
        if(isset($res->email)){
            $res->validate([
                   "email"=>"required|email",
                   "password"=>[
                    "required",
                    'min:6',
                    'regex:/[a-z]/',
                    'regex:/[A-Z]/',
                    'regex:/[0-9]/',
                    'regex:/[@#$%&*]/'
                   ],
            ]);
            if($res->email == "admin@gmail.com" && $res->password == "Admin@1212"){
                session(["email"=>$res->email]);
                return  redirect()->route('home');
            }else{
            $result = User::where("email", "=", $res->email)->where("password", "=", $res->password)->get();
            if(count($result) == 1){
                foreach($result as $value){
                    $u_id = $value->u_id;
                }
                session(["email"=>$res->email]);
                session(["u_id"=>$u_id]);
               return redirect()->route('index');
            }else{
                $error = "No User Found"; 
            }
         }
    }
        return view("login",compact('error'));
    }
    function logout(Request $res){
        $res->session()->flush();
        return redirect()->route('login');
    } 
}