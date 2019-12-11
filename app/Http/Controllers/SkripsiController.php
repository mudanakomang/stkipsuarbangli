<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SkripsiController extends Controller
{
    //
    public function index(Request $request){
        $tahun=\DB::select(\DB::raw('SELECT YEAR(tgl_terbit) as tahun FROM skripsi GROUP BY tahun ORDER BY tahun desc'));    
        $skripsi=\App\Skripsi::when(!empty($request->program),function($q) use ($request){
            $q->where('program','=',$request->program);
        })->when(!empty($request->tahun),function($q) use ($request){
            $q->whereRaw('year(tgl_terbit)='.$request->tahun);
        })->paginate(15);  
       
            return view('repository.skripsi',['skripsi'=>$skripsi,'tahun'=>$tahun]);
    }
    public function detail($id){
        $skripsi=\App\Skripsi::find($id);
        $tahun=\DB::select(\DB::raw('SELECT YEAR(tgl_terbit) as tahun FROM skripsi GROUP BY tahun ORDER BY tahun desc limit 15'));
        return view('repository.detail',['skripsi'=>$skripsi,'tahun'=>$tahun]);
    }
    public function download($type,$id){
        $skripsi=\App\Skripsi::find($id);
        $pathToFileAbstrak=public_path().'/files/skripsi/'.$skripsi->abstrak_file;
        $pathToFileFull=public_path().'/files/skripsi/'.$skripsi->full;
        if($type=='abstrak'){
            return  response()->download($pathToFileAbstrak);
        } else{
            return response()->download($pathToFileFull);
        }
    }
    public function cari(Request $request){
        $tahun=\DB::select(\DB::raw('SELECT YEAR(tgl_terbit) as tahun FROM skripsi GROUP BY tahun ORDER BY tahun desc'));    
        $skripsi=\App\Skripsi::when(!empty($request->program),function($q) use ($request){
            $q->where('program','=',$request->program);
        })->when(!empty($request->tahun),function($q) use ($request){
            $q->whereRaw('year(tgl_terbit)='.$request->tahun);
        })->paginate(15);  
       
            return view('repository.skripsi',['skripsi'=>$skripsi,'tahun'=>$tahun]);
    }
    public function arsip($tahun){
        $skripsi=\App\Skripsi::whereRaw('year(tgl_terbit)='.$tahun)->paginate(15);
        $tahun=\DB::select(\DB::raw('SELECT YEAR(tgl_terbit) as tahun FROM skripsi GROUP BY tahun ORDER BY tahun desc limit 15'));    
        return view('repository.skripsi',['skripsi'=>$skripsi,'tahun'=>$tahun]);
    }
}
