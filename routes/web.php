<?php

use App\Http\Controllers\ClienteControlador;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('produtos', 'MeuControlador@produtos');
Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::resource('clientes', 'ClienteControlador');

// Route::get('/teste/{nome}', function($nome){
//     return "olá, ".$nome;
// });
// Route::get('/seunome/{nome?}', function($nome =null){
//     return "olá, ".$nome;
// });
// Route::get('/rotacomregras/{nome}/{n} ', function($nome,$n){
//     for($i=0; $i<$n; $i++){
//         echo "olá, ".$nome. "<br>";
//     }
// })->where('nome','[A-Za-z]+')->where('n', '[0-9]+');

// Route::prefix('/app')->group(function(){
//     Route::get('/',function(){
//         return view('app');
//     })->name('app');
//     Route::get('/user',function(){
//         return view('user');
//     })->name('app.user');
//     Route::get('/profile',function(){
//         return view('profile');
//     })->name('app.profile');
// });

// Route::get('/produtos', function(){
//     echo '<h1>Produtos</h1>';
//     echo '<ol>';
//     echo '<li> Notebook</li>';
//     echo '<li> Impressora</li>';
//     echo '</ol>';
// })->name('meusprodutos');

// Route::redirect('todosprodutos1', 'produtos', 301);
// Route::get('todosprodutos2',function(){
//     return redirect()->route('meusprodutos');
// });

// Route::post('/requisicoes', function (Request $request) {
//     return "Hello POST";
// });
// Route::delete('/requisicoes', function (Request $request) {
//     return "Hello DELETE";
// });
// Route::put('/requisicoes', function (Request $request) {
//     return "Hello PUT";
// });
// Route::patch('/requisicoes', function (Request $request) {
//     return "Hello PATCH";
// });