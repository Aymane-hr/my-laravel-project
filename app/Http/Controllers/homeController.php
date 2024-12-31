<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        $nom = $request->nom;
        //$languages = [];
        $languages = ['php', 'javascript', 'java', 'c'];
        return view("salam", [
            "nom" => $nom,
            "languages" => $languages
        ]); 
    }
}