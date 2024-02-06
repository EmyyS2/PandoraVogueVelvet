<?php

use App\Http\Controllers\ADMController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//ADM
Route::post('adm/cadastro', [ADMController::class, 'ADMcadastro']);
Route::delete('adm/delete/{id}', [ADMController::class, 'excluir']);
Route::put('adm/update', [ADMController::class, 'update']);
Route::post('adm/nome', [ADMController::class, 'pesquisarPorNome']);
Route::post('adm/senha/redefinir', [ADMController::class, 'redefinirSenha']);
//ADM Serviço
Route::post('adm/servico/cadastro', [ServicoController::class, 'servico']);
Route::post('adm/servico/nome', [ServicoController::class, 'pesquisarPorNome']);
Route::delete('adm/servico/delete/{id}', [ServicoController::class, 'excluir']);
Route::put('adm/servico/update', [ServicoController::class, 'update']);
//ADM Profissional
Route::post('adm/profissional/cadastro', [ProfissionalController::class, 'profissional']);
Route::post('adm/profissional/nome', [ProfissionalController::class, 'pesquisarPorNome']);
Route::delete('adm/profissional/delete/{id}', [ProfissionalController::class, 'excluir']);
Route::put('adm/profissional/update', [ProfissionalController::class, 'update']);
Route::post('adm/profissional/senha/redefinir', [ProfissionalController::class, 'redefinirSenha']);
//ADM Horario

//ADM Forma de pagamento
Route::put('adm/editar/pagamento', [PagamentoController::class,  'updatepagamento']);
Route::post('adm/cadastro/pagamento', [PagamentoController::class, 'cadastroTipoPagamento']);
Route::post('adm/pesquisar/nome/pagamento', [PagamentoController::class, 'pesquisarPorTipoPagamento']);
Route::delete('adm/delete/pagamento/{id}', [PagamentoController::class, 'deletarPagamento']);
Route::get('adm/visualizar/pagamento', [PagamentoController::class, 'visualizarCadastroTipoPagamento']);
Route::get('adm/visualizar/pagamento/habilitado', [PagamentoController::class, 'visualizarCadastroPagamentoHabilitado']);
Route::get('adm/visualizar/pagamento/desabilitado', [PagamentoController::class, 'visualizarCadastroPagamentoDesabilitado']);




//Profissional
Route::post('profissional/cadastro', [ProfissionalController::class, 'profissional']);
Route::post('profissional/nome', [ProfissionalController::class, 'pesquisarPorNome']);
Route::delete('profissional/delete/{id}', [ProfissionalController::class, 'excluir']);
Route::put('profissional/update', [ProfissionalController::class, 'update']);
Route::post('profissional/senha/redefinir', [ProfissionalController::class, 'redefinirSenha']);
//Profissional Agenda
Route::post('profissional/agenda/agendamento', [AgendaController::class, "criarAgenda"]);
Route::post('profissional/agenda/criarhorario', [AgendaController::class, "criarHorarioProfissional"]);
Route::post('profissional/agenda/pesquisahorario', [AgendaController::class, 'pesquisarPorDataDoProfissional']);
Route::get('profissional/agenda/retornaTodos', [AgendaController::class, 'retornarTudo']);
Route::delete('profissional/agenda/delete/{id}', [AgendaController::class, 'excluiAgenda']);
Route::put('profissional/agenda/update', [AgendaController::class, 'updateAgenda']);
//Profissional Cliente
Route::post('profissional/clientes/cadastro', [ClienteController::class, 'clientes']);
Route::delete('profissional/clientes/delete/{id}', [ClienteController::class, 'excluir']);
Route::put('profissional/clientes/update', [ClienteController::class, 'update']);
Route::post('profissional/clientes/nome', [ClienteController::class, 'pesquisarPorNome']);
Route::post('profissional/clientes/senha/redefinir', [ClienteController::class, 'redefinirSenha']);



//Clientes
Route::post('clientes/cadastro', [ClienteController::class, 'clientes']);
Route::delete('clientes/delete/{id}', [ClienteController::class, 'excluir']);
Route::put('clientes/update', [ClienteController::class, 'update']);
Route::post('clientes/nome', [ClienteController::class, 'pesquisarPorNome']);
Route::post('clientes/senha/redefinir', [ClienteController::class, 'redefinirSenha']);




//Serviços
Route::post('servico/cadastro', [ServicoController::class, 'servico']);
Route::post('servico/nome', [ServicoController::class, 'pesquisarPorNome']);
Route::delete('servico/delete/{id}', [ServicoController::class, 'excluir']);
Route::put('servico/update', [ServicoController::class, 'update']);





//Agenda
Route::post('agenda/agendamento', [AgendaController::class, "criarAgenda"]);
Route::post('agenda/criarhorario', [AgendaController::class, "criarHorarioProfissional"]);
Route::post('agenda/pesquisahorario', [AgendaController::class, 'pesquisarPorDataDoProfissional']);
Route::get('agenda/retornaTodos', [AgendaController::class, 'retornarTudo']);
Route::delete('agenda/delete/{id}', [AgendaController::class, 'excluiAgenda']);
Route::put('agenda/update', [AgendaController::class, 'updateAgenda']);




//Forma de pagamento
Route::put('editar/pagamento', [PagamentoController::class,  'updatepagamento']);
Route::post('cadastro/pagamento', [PagamentoController::class, 'cadastroTipoPagamento']);
Route::post('pesquisar/nome/pagamento', [PagamentoController::class, 'pesquisarPorTipoPagamento']);
Route::delete('delete/pagamento/{id}', [PagamentoController::class, 'deletarPagamento']);
Route::get('visualizar/pagamento', [PagamentoController::class, 'visualizarCadastroTipoPagamento']);
Route::get('visualizar/pagamento/habilitado', [PagamentoController::class, 'visualizarCadastroPagamentoHabilitado']);
Route::get('visualizar/pagamento/desabilitado', [PagamentoController::class, 'visualizarCadastroPagamentoDesabilitado']);
