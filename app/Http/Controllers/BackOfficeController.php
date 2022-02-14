<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



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
        $request->image->move(public_path('/storage/images/'),$newImageName);

        $star = new Star;
        $star->lastname = $request->lastname;
        $star->firstname = $request->firstname;
        $star->description = $request->description;
        $star->image_path = '/storage/images/'.$newImageName;
        $star->save();
        return redirect('/');
    }

    public function show(Star $star){
        $stars = Star::all();
        return view('backOffice', ['stars' => $stars]);
    }

    public function showUpdateStar($id) {
        $star = Star::findOrFail($id);
        return view('updateStar', ['star' => $star]);
    }
    public function updateStar(Request $request, $id){
        $star = Star::findOrFail($id);
        $star->lastname = $request->lastname;
        $star->firstname = $request->firstname;
        if($request->file("image")){ 
         //verifier si le fichier est valide ou non selon les required
         $request->validate(['image'=>'required|mimes:png,jpg,jpeg,webp|min:0|max:5048']);
         //renommer le request->image de manière unique grace à time()
         $filename = time().'.'.$request->image->extension();
         //créer var $path et mettre l'image requêtée avec le storeAs cela va enregistrer dans un dossier 'images' le fichier $filename et fait un lien symbolique vers le public images
         $path = $request->file('image')->storeAs(//storeAs() allows you to control the file name. 
         'images', $filename, 'public');
    @dd($path);
    
         Storage::delete($star->image_path);//supprime dans le dossier public l'image de l'article précédent sinon les images remplacées s'accumulent dans le pc
         $star->image_path = $path;//la nouvelle image 
        }  
        $star->save(); 
        
        return redirect('/');
        }

   
    public function deleteStar(Request $request) {
        $star = Star::find($request->id);
        //supprimer aussi l'image depuis dossier images
        Storage::delete($star->image_path);
        $star->delete();
        return redirect('/backOffice');
    }
    
    
  
}
