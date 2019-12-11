<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    //
    public function index(){
        return view('alumni.index');
    }
    public function getalumni(Request $request){
       
        $page =$request->page;
        $limit=20;
        $alumni=\App\Alumni::when(!empty($request->nama),function($q) use ($request){
            return $q->where('nama','=',$request->nama);
        })->orderBy('nim','asc')->limit($limit)->offset(($page - 1) * $limit)->paginate($limit);
        return response(['data'=>$alumni],200);
    }
}
