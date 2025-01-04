<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(Request $request){
        $users = [
            [
                "id" => 1,
                "nom" => "Aymane El Harchy",
                "metier" => "Développeur Full-stack"
            ],
            [
                "id" => 2,
                "nom" => "Hajar",
                "metier" => "logistique et transport"
            ],
            [
                "id" => 3,
                "nom" => "Youssef Ben",
                "metier" => "Analyste de Données"
            ]
        ];
        return view('profile', ['users' => $users]);
    }
}
