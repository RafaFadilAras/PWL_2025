<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'Rafa Fadil Aras 2341720007';
    }

    public function user($name='Belum diisi'){
        return 'Nama Saya '.$name;
    }
}
