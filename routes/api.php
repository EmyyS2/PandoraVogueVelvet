<?php

use App\Http\Controllers\ADMController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//ADM
Route::post('adm/cadastro', [ADMController::class, 'ADMcadastro']);
Route::delete('adm/delete/{id}', [ADMController::class, 'excluir']);
Route::put('adm/update', [ADMController::class, 'update']);
Route::post('adm/nome', [ADMController::class, 'pesquisarPorNome']);
Route::post('adm/senha/redefinir',[ADMController::class, 'redefinirSenha']);

//Clientes
Route::post('clientes/cadastro', [ClienteController::class, 'clientes']);
Route::delete('clientes/delete/{id}', [ClienteController::class, 'excluir']);
Route::put('clientes/update', [ClienteController::class, 'update']);
Route::post('clientes/nome', [ClienteController::class, 'pesquisarPorNome']);
Route::post('clientes/senha/redefinir',[ClienteController::class, 'redefinirSenha']);

//Profissional
Route::post('Profissional/cadastro',[ProfissionalController::class, 'profissional']);
Route::post('Profissional/senha/redefinir',[ProfissionalController::class, 'redefinirSenha']);