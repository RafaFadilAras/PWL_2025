<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function hello(){
        return 'Hello World';
    }

    public function world(){
        return 'World';
    }

    public function pesan(){
        return 'selamat datang';
    }

}
