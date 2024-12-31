<?php

use App\Http\Controllers\homeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/{nom}",[homeController::class, 'index']);

// Route::get('/aymane/{nom}/{prenom}', function (Request $request) {
//     return view('aymane',[
//         'nom' => $request->nom,
//         'prenom' => $request->prenom
//     ]);
// });