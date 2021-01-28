<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Resources\UserCollection;


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


Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/user/{id}', function ($id) {
    return new UserResource(User::findOrFail($id));
});


Route::get('/users', function () {
    return UserResource::collection(User::all());
});



Route::get('/users', function () {
    return UserResource::collection(User::all()->keyBy->id);
});

