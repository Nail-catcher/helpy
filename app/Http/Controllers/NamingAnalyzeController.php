<?php

namespace App\Http\Controllers;

use App\Models\NamingAnalyze;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class NamingAnalyzeController extends Controller
{
    public function __invoke(Request $request)
    {
        if(!empty($request->index)){
        $na = NamingAnalyze::where('index', $request->index)->first();

        return ['nameanalyze'=>$na];
        } else {
            $na = NamingAnalyze::where('index', 'like', $request->halfindex.'%')->paginate(15);

            return ['nameanalyzes'=>$na];
        }
    }
}
