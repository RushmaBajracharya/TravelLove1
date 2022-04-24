<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $users=User::all();
        return view('signup',compact('users'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $user=User::create(["first_name"=>$request->fname,"last_name"=>$request->lname,"email"=>$request->email,"address"=>$request->address,"phone_number"=>$request->number,"username"=>$request->username,"password"=>bcrypt($request->password),"confirm_password"=>bcrypt($request->repassword)]);
        return redirect()->route('travellove');
    }
    public function loginView(){
        return view('login');
    }
    public function loginCheck(Request $request){
        $credentials=$request->except('_token');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('travellove');
        }else{
            return view('login');
        }
    }
}
