<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', [AppController::class, 'sobre']);

Route::get('/base', function () {
    return view('base');
});

Route::get('/usuarios', [AppController::class, 'exibirUsuarios']);
Route::post('/add-usuario', [AppController::class, 'addUsuario']);

Route::get('/edit-usuario/{id}', [AppController::class, 'editUsuario']);

//update Usuario
Route::put('/atualizar/{id}', [AppController::class, 'atualizar']);

Route::delete('/del-usuario/{id}', [AppController::class, 'delUsuario']);


//rota para fazer a autenticação, comentário: Larissa
Route::post('/entrar_usuario', [AppController::class, 'Entrar']);

Route::get('/entrar_usuario', function () {
    return view('entrar_usuario');
});


//rota para a view 'dashboard', comentário:Larissa
Route::get('/dashboard', function () {
    return view('dashboard');
});

//rota para o logout do usuario, comentário: Larissa
Route::post('/Sair', [AppController::class, 'Sair']);