<?php

use App\Http\Controllers\AlunosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('alunos', [AlunosController::class, "index"]);
Route::post('alunos', [AlunosController::class, "store"]);
Route::put('alunos/{id}', [AlunosController::class, "update"]);
Route::delete('alunos/{id}', [AlunosController::class, "delete"]);