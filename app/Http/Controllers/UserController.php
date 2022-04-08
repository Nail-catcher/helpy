<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
       $user = User::where('phone','+'.$request->phone)->first();
       //dd($user);
       return $user;
    }


    public function updateUser(Request $request)
    {
        $shortname=mb_substr($request->second_name,0,1).mb_substr($request->first_name,0,1).mb_substr($request->middle_name,0,1);

        $user = User::whereId($request->id)->first();
        $user->frist_name=$request->first_name;
        $user->second_name=$request->second_name;
        $user->middle_name=$request->middle_name;
        $user->short_name=$shortname;
        $user->email=$request->email ?? null;
        $user->phone=$request->phone;
        $user->save();
        return 'success';

    }



}
