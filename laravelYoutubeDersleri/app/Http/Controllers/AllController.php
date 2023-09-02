<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AllController extends Controller
{
    public function index(){
        return view("index");
    }

    public function iletisim(){
        // return view("iletisim");
        // return redirect(route("hakkimda"));
        // return redirect()->route("hakkimda");
        return Redirect::route("hakkimda");
    }

    public function hakkimda(){
        return view("hakkimda");
    }
}
