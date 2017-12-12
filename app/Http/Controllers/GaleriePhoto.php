<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\DbPhoto;

class GaleriePhoto extends Controller
{
    public function displayPhoto() {
    	//recuperation des données du model
    	$display = DbPhoto::getPhoto();
    	//dd($display);
    	//envoie des données dans la vue
    	return view('photo')->with('chemin',$display);
    }
}
