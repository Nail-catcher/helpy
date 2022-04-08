<?php

namespace App\Http\Controllers;

use App\Models\NamingAnalyze;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class NamingAnalyzeController extends Controller
{
    public function __invoke(Request $request)
    {
        $na = NamingAnalyze::where('index', $request->index)->first();

        return ['nameanalyze'=>$na];
    }
}
