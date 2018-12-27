<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\equipeRequest;
use App\Parametre;
use App\Equipe;
use App\User;
use App\Actualites;
class FrontOfficeController extends Controller
{
    //
    public function ShowEquipeDetails($achronymes)
    {
       // $labo = Parametre::find('1');
        $equipe = Equipe::find($achronymes);
       return view('equipeGL',['equipe'=>$achronymes]);/*->with([
           'equipe' => $equipe,
           'labo'=>$labo,
        ]);*/
    } 

     public function ShowActualiteDetails(){
      $labo = Parametre::find('1');
       $membre = User::all();
       $actualite = Actualites::all();

        return view('actualite')->with([
            'actualite' => $actualite,
            'users' => $membre,
            'labo'=>$labo,
        ]);

     }
      public function ShowUserDetails($id)
    {
        
       return view('Profile Membre',['user'=>$id]);
    } 

    public function ShowProjetDetails($id)
    {
        return view('projet',['projets'=>$id]);
    } 
}
