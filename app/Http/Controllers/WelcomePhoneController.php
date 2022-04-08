<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WelcomePhoneController extends Controller
{
    public function index()
    {
        return view('welcomephone');
    }

    public function enter()
    {
        return view('welcomephoneenter');
    }

    public function auth(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();
        if($user){
            $pass = rand(1000,9999);
            $user->password = Hash::make($pass);
            $user->save();
            return $pass;
        } else {
            $rt = "Пользователь не найден!";
            return $rt;
        }
    }

    public function getuser(Request $request)
    {
//        $user = User::where('phone',$request->phone)->where('password',$request->pass)->first();
//        //dd($user);
//        return $user;



        $request->validate([
            'phone' => ['required'],

            'password' => ['required'],
        ]);
        //$user = User::where(['phone' => $request->phone])->first();


            if (Auth::attempt($request->only('phone', 'password'))) {
                return response()->json(Auth::user(), 200);
            }


            return response()->json(['error' => true,  'message' => 'Введен неверный логин или пароль'], 400);
        }




}
