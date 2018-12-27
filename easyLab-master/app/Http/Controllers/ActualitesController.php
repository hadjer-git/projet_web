<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualites;
use App\Parametre;
class ActualitesController extends Controller
{
    public function store(Request $request , $id)
    {
       $actualite = new Actualites();
        $labo = Parametre::find('1');
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);

        }
        else{
            $file_name="userDefault.png";
        }

            $actualite->titre = $request->input('titre');
            $actualite->user_id = $id;
            $actualite->contenu = $request->input('contenu');
            $actualite->photo = 'uploads/photo/'.$file_name;

            $actualite->save();
        return redirect('membres/'.$id.'/details');
    }

    
}
