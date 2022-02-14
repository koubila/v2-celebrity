<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Star;
use Illuminate\Support\Facades\Storage;


class StarController extends Controller
{
    public function show(){
        $stars = Star::all();
        return view('welcome',['stars'=>$stars]);
    }
    // public function deleteStar(Request $request) {
    //     // @dd($request);
    //     $star = Star::find($request->id);
    //     //supprimer aussi l'image depuis dossier images
    //     Storage::delete($star->image_path);
    //     $star->delete();
    //     return redirect('/backOffice');
    // }
}
