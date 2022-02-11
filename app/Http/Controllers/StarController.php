<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;

class StarController extends Controller
{
    public function show(){
        $stars = Star::all();
        return view('welcome',['stars'=>$stars]);
    }
   
}
