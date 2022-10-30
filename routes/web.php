<?php

use App\Http\Controllers\todoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [todoController::class, 'indexPage']);
Route::get("/add-todo", [todoController::class, 'getAddTodo']);

Route::prefix('/todo')->group(function() { 

    Route::get('/{id}', [todoController::class, 'getSingleTodo']);
    Route::get('/update/{id}', [todoController::class, 'getUpdateTodo']);
    Route::put('/{id}', [todoController::class, 'updateTodo']);
    Route::post("/", [todoController::class, 'postAddTodo']);
    Route::delete('/{id}', [todoController::class, 'deleteTodo']);

});