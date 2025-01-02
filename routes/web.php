<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\contactController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/",[homeController::class, 'index']);
Route::get("/profile",[profileController::class, 'index']);
Route::get("/services",[serviceController::class, 'index']);
Route::get("/contact",[contactController::class, 'index']);

// Route::get('/aymane/{nom}/{prenom}', function (Request $request) {
//     return view('aymane',[
//         'nom' => $request->nom,
//         'prenom' => $request->prenom
//     ]);
// });