<?php

namespace App\Http\Controllers;

use App\Models\Analyze;
use Illuminate\Http\Request;

class WebAnalyzeController extends Controller
{
    public function index(Request $request)
    {

        $analyzes = Analyze::where('inz', $request->inz)->where(function ($query) use ($request) {
            $query -> whereHas('user' , function ($query) use ($request) {
                $query ->where('short_name','=',$request->short_name);
            });
        })->get();

//dd($analyzes);
        return view('simpleanalyzes',['analyzes'=>$analyzes]);

    }
}
