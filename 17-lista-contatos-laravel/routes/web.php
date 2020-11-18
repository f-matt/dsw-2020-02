<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Lista os contatos cadastrados
Route::get('/', function () {

  $contatos = Contato::orderBy('nome', 'asc')->get();

  return view('lista', [
    'contatos' => $contatos
  ]);

});


// Carrega o formulário para cadastro de novos contatos
Route::get('/contato', function () {

  return view('contato');

});


// Salva (insere/atualiza) um contato
Route::post('/contato', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'nome' => 'required',
        'email' => 'required'
    ]);

    if ($validator->fails()) {
        return redirect('/contato')
            ->withInput()
            ->withErrors($validator);
    }

    if (isset($request->id))
        $contato = Contato::findOrFail($request->id);
    else
        $contato = new Contato;

    $contato->nome = $request->nome;
    $contato->email = $request->email;
    $contato->save();

    return redirect('/');

});


// Carrega as informações do contato para atualização
Route::get('/contato/{id}', function ($id) {

  $contato = Contato::findOrFail($id);

  return view('contato', [
    'contato' => $contato
  ]);

});


// Remove um contato
Route::delete('/contato/{id}', function ($id) {

    Contato::findOrFail($id)->delete();

    return redirect('/');

});
