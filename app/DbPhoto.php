<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DbPhoto extends Model
{
	//fonction static pour pouvoir l'utiliser directement avec le nom de la classe sans faire d'objet
    public static function getPhoto() {
    	//Récuperation des données dans un tableau d'objet
    	$chemin = DB::select('SELECT * FROM photo');
    	//$ chemin = DB::table('photo')->get();
    		return $chemin;
    }
}
