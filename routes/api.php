<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\AuthenticationException;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Resources\UserCollection;

/*
|-----------------------------      s---------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tokens/create', function (Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if(!auth()->attempt($request->only('email','password'))) {
       throw new AuthenticationException();
    }

    return [
        'token' => auth()->user()->createToken('test')->plainTextToken
    ];

});



Route::get('/user/{id}', function ($id) {
     return new UserResource(User::findOrFail($id));
    });


    Route::get('/users', function () {
      return UserResource::collection(User::all());
    });
