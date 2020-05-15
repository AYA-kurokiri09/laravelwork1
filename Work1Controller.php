<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Work1Controller extends Controller
{
    public function index () {
        return view('work1.index');
    }

    public function register () {
        return view('work1.register');
    }

}
