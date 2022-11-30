<?php

use App\Http\Controllers\PerfilController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/dashboard',[Controller::class,'function'])->name('controller.index');
Route::get('/{user:username}',[PerfilController::class,'index'])->name('perfil.index');
//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/',[Controller::class,'function'])->name('controller.function');
//Route::get('/',[Controller::class,'function'])->name('controller.function');


