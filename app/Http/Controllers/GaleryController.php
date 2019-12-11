<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    //
    public function index(){
        $galeri=\App\Galery::paginate(9);
        return view('galeri.index',['galeri'=>$galeri]);
    }
}
