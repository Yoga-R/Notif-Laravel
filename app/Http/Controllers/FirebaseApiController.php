<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tblfirebase;
class FirebaseApiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request);
        $firebase = tblfirebase::where('keyfirebase','=',$request->firebase)->first();
        if(!$firebase){
            tblfirebase::create([
                'keyfirebase'=>$request->firebase
            ]);
        }
        return response()->json("input berhasil", 200);
    }
}
