<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnalyzeStore;
use App\Http\Resources\AnalyzesResource;
use App\Models\Analyze;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnalyzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function simple_index(Request $request): AnalyzesResource
    {

        $analyzes = Analyze::where('inz', $request->inz)->where(function ($query) use ($request) {
                $query -> whereHas('user' , function ($query) use ($request) {
                    $query ->where('short_name','=',$request->short_name);
                });
        })->with(['user']);

            return new AnalyzesResource($analyzes->paginate());

    }
    public function index(Request $request): AnalyzesResource
    {
        $date = $request->date ?? null;
        $phone = $request->phone ?? null;
       $analyzes = Analyze::where('name', 'like', $request->name.'%')
          ->when($date, function ($query) use ($request) {
              return $query->where('date',  new Carbon($request->date));
          })
           ->when($phone, function ($query) use ($request) {
               $query -> whereHas('user' , function ($query) use ($request) {
                   $query ->where('email','=', Auth::user()->email);
               });

           })->with(['user']);

       return new AnalyzesResource($analyzes->paginate());
    }
    public function huindex(Request $request){
//       // dd(Auth::user());
////        $date = $request->date ?? null;
////        dd($request->name);
//        $analyzes = Auth::user()->analyzes->sortByDesc('id')->forPage($request->page ? $request->page :1,$request->paginate ? $request->paginate :10);
//
//        if($request->search and !empty($request->search)){
//        $analyzesName = $analyzes->where('name', 'like', $request->search);
//        $analyzesInz = $analyzes->where('inz','like', $request->search);
//        $analyzes=$analyzesName->merge($analyzesInz)->forPage($request->page ? $request->page :1,$request->paginate ? $request->paginate :10);
//        }
////        $analyzes = Analyze::where('name', 'like', $request->name.'%')
////            ->when($date, function ($query) use ($request) {
////                return $query->where('date',  new Carbon($request->date));
////            })
////            ->when($phone, function ($query) use ($request) {
////                $query -> whereHas('user' , function ($query) use ($request) {
////                    $query ->where('email','=', Auth::user()->email);
////                });
////
////            })->with(['user']);
//




        $countanal=Analyze::where('user_id',  Auth::user()->id)->count();
        if($request->search and !empty($request->search)){
            $analyzes=Analyze::where('user_id',  Auth::user()->id)->where('name','like', $request->search)->orWhere('inz','like', $request->search)->orderBy('id', 'DESC')->paginate($request->paginate ? $request->paginate :10);
        } else {
            $analyzes=Analyze::where('user_id',  Auth::user()->id)->orderBy('id', 'DESC')->paginate($request->paginate ? $request->paginate :10);

        }
        $pages = ceil($countanal/($request->paginate ? $request->paginate :10));
        if(Auth::user()->role==1){
           return redirect()->to('/admin');
        }else{
       return view('analyzes',['analyzes'=>$analyzes, 'pages'=>$pages]);
        }
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function updateAnal(Request $request)
    {
        $data=$request;
        $file = $request->file('file')->store('public/uploads');
        $user = User::firstOrCreate(['phone'=>'+'.$data['phone'] ]
            ,[
                'frist_name'=>$data['first_name'],
                'second_name'=>$data['second_name'],
                'middle_name'=>$data['middle_name'],
                'short_name'=>mb_substr($data['second_name'],0,1).mb_substr($data['first_name'],0,1).mb_substr($data['middle_name'],0,1),
                'email'=>$data['email']??null,
            ]

        );

        $analyze = Analyze::whereId($request->id)->first();
        $analyze->name= $data['analname'];
        $analyze->date=Carbon::parse($data['date'])->format('d.m,Y');
        $analyze->inz=$data['inz'];
//            'date'=>Carbon::now(),
        $analyze->user_id=$user->id;

            $analyze->url=basename($file);


        $analyze->save();
        return $analyze;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnalyzeStore $request)
    {
//        return $request;
        $data = $request->validated();
//        $data = $request;
//        dd($data);
        $file = $request->file('file')->store('public/uploads');
        $user = User::firstOrCreate(['phone'=>'+'.$data['phone'] ]
        ,[
                'frist_name'=>$data['first_name'],
                'second_name'=>$data['second_name'],
                'middle_name'=>$data['middle_name'],
                'short_name'=>mb_substr($data['second_name'],0,1).mb_substr($data['first_name'],0,1).mb_substr($data['middle_name'],0,1),
                'email'=>$data['email']??null,
            ]

        );
        //        $user = \App\Models\User::firstOrCreate([
//
//            //'phone'=>$data['phone'],
//            'role'=>2,
//        ]);
        $analyze = new Analyze([
           'name' => $data['analname'],
            'date'=>Carbon::parse($data['date'])->format('d.m,Y'),
            'inz'=>$data['inz'],
//            'date'=>Carbon::now(),
            'user_id'=>$user->id,

            'url'=>basename($file),
        ]);

        $analyze->save();
        return $analyze;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analyze  $analyze
     * @return \Illuminate\Http\Response
     */
    public function show(Analyze $analyze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analyze  $analyze
     * @return \Illuminate\Http\Response
     */
    public function edit(Analyze $analyze)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analyze  $analyze
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analyze $analyze)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analyze  $analyze
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analyze $analyze)
    {
        $analyze->delete();
            return 'success';
    }
}
