<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//ADM
Route::post('adm/cadastroclientes', [ClienteController::class, 'clientescadastro']);
Route::delete('adm/clientes/delete/{id}', [ClienteController::class, 'excluir']);
Route::put('adm/clientes/update', [ClienteController::class, 'update']);
//Clientes
Route::post('clientes', [ClienteController::class, 'clientes']);

//Profissional
Route::post('Profissional/senha/redefinir',[ProfissionalController::class, 'redefinirSenha']);