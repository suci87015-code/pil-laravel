<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('index');
});

Route::get('about',function(){
    return view('about');
});

Route::get('mahasiswa',function(){
    $nim = [0702231023];
    $nama = ['Suci Ramadhani'];
    $jumlah = count($nim);
    return view('mahasiswa',compact('nim','jumlah'));
});

Route::get('profile',function(){
    $nama = 'Suci';
    // return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});

