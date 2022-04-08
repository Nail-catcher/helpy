<?php

namespace App\Http\Controllers;

use App\Models\Analyze;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function index(Request $request)
    {

        if(Auth::user()->role==1){
        $countanal=Analyze::count();
        if($request->search and !empty($request->search)){
            if($request->dateto){
                $analyzes=Analyze::where('date','<=', Carbon::parse($request->dateto)->format('Y.m.d'))->where('date','>=', Carbon::parse($request->datefrom)->format('Y.m.d') )->where('name','like', $request->search)->orWhere('inz','like', $request->search)->orderBy('id', 'DESC')->paginate($request->paginate ? $request->paginate :10);
            }else {
                $analyzes=Analyze::where('name','like', $request->search)->orWhere('inz','like', $request->search)->orderBy('id', 'DESC')->paginate($request->paginate ? $request->paginate :10);

            }
            } else {
            if($request->dateto){
                $analyzes=Analyze::where('date','<=', Carbon::parse($request->dateto)->format('Y.m.d'))->where('date','>=', Carbon::parse($request->datefrom)->format('Y.m.d') )->orderBy('id', 'DESC')->paginate($request->paginate ? $request->paginate :10);
//            $analyzes=Analyze::where('date','<=',$request->to ? Carbon::parse($request->to)->format('Y.m.d') : null)->where('date','>=',$request->from ? Carbon::parse($request->from)->format('Y.m.d') : null)->orderBy('id', 'DESC')->paginate($request->paginate ? $request->paginate :10);
            }else {
                $analyzes=Analyze::orderBy('id', 'DESC')->paginate($request->paginate ? $request->paginate :10);

            }
            }

        $pages = ceil($countanal/($request->paginate ? $request->paginate :10));
//dd($analyzes);
    return view('admin', ['analyzes'=>$analyzes,'pages'=>$pages]);
            } else {
            return redirect()->to('/');
        }
    }
}
