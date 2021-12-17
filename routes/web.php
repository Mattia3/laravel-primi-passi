<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
 return view('home');
});


Route::get('/email', function () {
  $data = [
    'listaEmail' => [
      'Rossimarco@gmail.com',
      'Marcorossi@gmail.com',
      'Marco@gmail.com',
      'rossi@gmail.com'
    ]
  ];
  return view('email', $data);
})->name("emailUtente");


Route::get('/nome', function () {
  $data = [
    'nome' => "Marco",
    'cognome' => "Rossi",
  ];
  return view('nome', $data);
})->name("nomeUtente");
