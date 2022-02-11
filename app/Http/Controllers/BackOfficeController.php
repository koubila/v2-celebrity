<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;



class BackOfficeController extends Controller
{
    public function showAddStar() {
    $stars = Star::all();
    return view('addStar', ['stars' => $stars]);
    }
    public function addStar(Request $request) {
       
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg,webp|min:0|max:5048']);
        $newImageName = time().'_'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        $star = new Star;
        $star->lastname = $request->lastname;
        $star->firstname = $request->firstname;
        $star->description = $request->description;
        $star->image_path = $newImageName;
        $star->save();
        return redirect('/');
    }

    public function show(Star $star)
    {
        $stars = Star::all();
        return view('backOffice', ['stars' => $stars]);
    }

     public function showUpdateStar($id) {
        $star = Star::findOrFail($id);
        return view('updateStar', ['star' => $star]);
    }
    public function updateStar(Request $request, $id) {
       //update la nouvelle image
        
        $star = Star::findOrFail($id);
        $star->lastname = $request->lastname;
        $star->firstname = $request->firstname;
        // $star->image = $request->image;
        // $star->image_path = $newImageName;
        $star->description = $request->description;
        $star->save();
        return redirect('/');
    }

    public function deleteStar(Request $request) {
        
        $star = Star::find($request->id);
       //supprimer aussi l'image depuis dossier img
        $star->delete();
        return redirect('/backOffice');
    }
    
  
}
