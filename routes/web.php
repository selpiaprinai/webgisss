<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AuthControllers;

// Route::get('/', function () {
//     // return view('welcome');
//     return "HELLO WORD";
// });

// Route::get('/biodata', function(){
//     return " NAMA : hasdian <br> NIM : SI19220003 <br> JURUSAN : SI";
// });

// Route::get('/lokasi/{id}', function(string $id){
//     return 'lokasi ID'.$id;
// });

// Route::get('/mahasiswa/{nama}', function(string $nama){
//     return 'tampilkan data mahasiswa dengan nama  '.$nama;
// });

// Route::get('/stok_barang/{id1}/{id2}', function ($id1,$id2) {
//     return 'cek sisa stok untuk  ' . $id1  . ' ' . $id2;
// });

// Route::get('/barang/{id?}', function ($id = null) {
//     $stokInfo = 'cek sisa stok barang'; 

//     if ($id === null) {
//         return $stokInfo . ' smart phone samsung';
//     }

//     if ($id === 'dispenser') {
//         return $stokInfo .' ' . $id . ' asus';
//     }

// });

// Route::get('/user/{id}', function ($id) {
//     if (!preg_match('/^\d+$/', $id)) {
//         abort(404); 
//     }
//     return 'Tampilkan User Dengan ID =  ' . $id;
// });

// Route::get('/angka/{id}', function ($id) {
//     if (!preg_match('/^[a-za]{2}[0-9]+$/', $id)) {
//         abort(404); 
//     }
//     return 'Tampilkan User Dengan ID =  ' . $id;
// });

// Route::get ('/mhs', function(){
//     $nama = "hasdian";
//     $nim = "SI19220003";
//     return view('mhs', compact('nama','nim'));
// });



Route ::get('/dashboard',[Dashboard::class,'index'])->middleware('auth');
Route ::get('/user',[AuthControllers::class,'dataUser']);
Route ::get('/login',[AuthControllers::class, 'index']);
Route ::post('/login',[AuthControllers::class, 'userLogin']);
Route ::get('/register',[AuthControllers::class, 'register'
]);
Route ::get('/logout',[AuthControllers::class, 'logout'
]);