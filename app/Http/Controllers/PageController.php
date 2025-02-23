<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Rafa Fadil Aras 2341720007';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id '.$id;
    }
}
