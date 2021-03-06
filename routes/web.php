<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $slides=\App\Slider::where('status','=','1')->orderBy('created_at','desc')->limit(3)->get();
    $posts=\App\Post::orderBy('created_at','desc')->limit(6)->get();

    return view('main',['slider'=>$slides,'posts'=>$posts]);
});

Route::group(['prefix' => 'profil'], function () {
    Route::get('visi-misi', function () {
        return view('profil.visi_misi');
    });
    Route::get('mengapa-stkipsuar', function () {
        return view('profil.profil_kampus');     
    });
    Route::get('profil-ketua-yayasan', function () {
       return view('profil.ketua_yayasan'); 
    });
    Route::get('profil-pejabat-struktural', function () {
        return view('profil.pejabat_struktural');
    });
    Route::get('kampus-stkip', function () {
        return view('profil.kampus_stkip');
    });
    Route::get('video-profil', function () {
        return view('profil.video_profil');
    });
});
Route::group(['prefix'=>'post'],function(){
    Route::get('detail/{id}','PostsController@detail');
    Route::get('kategori/{kategori}','PostsController@kategori');
    Route::get('tags/{id}','PostsController@tags');
});
Route::group(['prefix'=>'prodi'],function(){
    Route::get('pendidikan-bahasa-dan-sastra-indonesia',function(){
        return view('prodi.bahasa_indonesia');
    });
    Route::get('pendidikan-bahasa-inggris',function(){
        return view('prodi.bahasa_inggris');
    });
    Route::get('pendidikan-guru-sekolah-dasar',function(){
        return view('prodi.pgsd');
    });
});
Route::get('pendaftaran',function(){
    return view('pendaftaran.online');  
});
Route::get('pendaftaran/info',function(){
    $file = public_path().'/files/pendaftaran/'.'Alur Pendaftaran Mahasiswa Baru.pdf';
    
    return response()->download($file);
});
Route::group(['prefix'=>'repository'],function(){
    Route::get('skripsi','SkripsiController@index')->name('skripsi');
    Route::post('skripsi/cari','SkripsiController@cari');
    Route::get('skripsi/arsip/{tahun}','SkripsiController@arsip');
    Route::get('skripsi/detail/{id}','SkripsiController@detail');
    Route::get('skripsi/download/{type}/{id}','SkripsiController@download');
});
Route::get('galeri','GaleryController@index');
Route::get('alumni','AlumniController@index');
Route::post('getalumni','AlumniController@getalumni')->name('getalumni');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
