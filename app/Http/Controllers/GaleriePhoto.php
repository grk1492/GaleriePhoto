<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\DbPhoto;

class GaleriePhoto extends Controller
{
    public function displayPhoto() {
    	$display = DbPhoto::getPhoto();
    	//dd($display);
    	return view('photo')->with('chemin',$display);
    }
}
