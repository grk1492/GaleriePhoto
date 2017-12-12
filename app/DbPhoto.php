<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DbPhoto extends Model
{
    public static function getPhoto() {
    	$chemin = DB::select('SELECT * FROM photo');
    		return $chemin;
    }
}
