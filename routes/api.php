<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DespesasController;
use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//testando api
Route::get('/', function () {
    return response()->json([
        'sucess' => true
    ]);
});

//Login 

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['middleware' =>['auth:sanctum']],function () {
// Route::apiResource('users', UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

});

//Users.
/*
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/show/{id}', [UserController::class, 'show'])->name('users.show');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');

//Posts.
Route::get('/receitas', [ReceitasController::class, 'index'])->name('posts.index');
Route::post('/receitas/store', [ReceitasController::class, 'store'])->name('posts.store');
Route::get('/receitas/show/{id}', [ReceitasController::class, 'show'])->name('posts.show');
Route::put('/receitas/update/{id}', [ReceitasController::class, 'update'])->name('posts.update');
Route::delete('/receitas/destroy/{id}', [ReceitasController::class, 'destroy'])->name('posts.destroy');

//Tags.
Route::get('/despesas',[DespesasController::class,'index'])->name('tags.index');
Route::post('/despesas/store',[DespesasController::class,'store'])->name('tags.store');
Route::get('/despesas/show/{id}', [DespesasController::class, 'show'])->name('tags.show');
Route::put('/despesas/update/{id}', [DespesasController::class, 'update'])->name('tags.update');
Route::delete('/despesas/destroy/{id}', [DespesasController::class, 'destroy'])->name('tags.destroy');
*/