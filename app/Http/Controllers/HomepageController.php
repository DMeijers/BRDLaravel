<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function show(Request $request){
        return view('homepage',['info'=>"laravel test"]);
    }
}
