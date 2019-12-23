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
        $alumni=\App\Alumni::when($request->nama!=null  && $request->jurusan!=null  &&  $request->periode!=null,function($q) use ($request){
            $q->where('nama','LIKE',"%$request->nama%")->where('jurusan','=',"$request->jurusan")->where('periode','=',"$request->periode");
        })->when($request->nama!=null  && $request->jurusan!=null  &&  $request->periode==null,function($q) use($request){
            $q->where('nama','LIKE',"%$request->nama%")->where('jurusan','=',"$request->jurusan");
        })->when($request->nama!=null  && $request->jurusan==null  &&  $request->periode==null,function($q) use ($request){
            $q->where('nama','LIKE',"%$request->nama%");
        })->when($request->nama==null  && $request->jurusan==null  &&  $request->periode!=null,function($q) use ($request){
            $q->where('periode','=',"$request->periode");
        })->when($request->nama==null  && $request->jurusan!=null  &&  $request->periode!=null,function($q) use ($request){
            $q->where('jurusan','=',"$request->jurusan")->where('periode','=',"$request->periode");
        })->when($request->nama!=null  && $request->jurusan==null  &&  $request->periode!=null,function($q) use ($request){
            $q->where('nama','LIKE',"%$request->nama%")->where('periode','=',"$request->periode");
        })->orderBy('nim','asc')->limit($limit)->offset(($page - 1) * $limit)->paginate($limit);
       
        return response(['data'=>$alumni],200);
    }
}
