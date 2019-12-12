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
        $alumni=\App\Alumni::when($request->nama !='',function($q) use ($request){
            return $q->where('nama','LIKE',"%$request->nama%")->orWhere('nim','LIKE',"%$request->nama%");
        })->when($request->jurusan != '',function($q) use($request){
            return $q->where('jurusan','=',$request->jurusan);
        })->when($request->periode!='',function($q) use ($request){
            return $q->where('periode','=',$request->periode);
        })->orderBy('nim','asc')->limit($limit)->offset(($page - 1) * $limit)->paginate($limit);
        return response(['data'=>$alumni],200);
    }
}
