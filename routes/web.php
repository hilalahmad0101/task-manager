<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::controller(BoardController::class)->group(function(){
    Route::get('/board', 'getAllBoard')->name('board.list');
    Route::post('/create/board', 'createBoard')->name('board.create');
    Route::get('/board/show/{id}/{slug}','showBoard')->name('board.show');
    Route::post('/board/edit','editBoard')->name('board.edit');
});

Route::controller(TaskController::class)->group(function(){
    // Route::get('/board', 'getAllBoard')->name('board.list');
    Route::post('/create/task', 'createTask')->name('task.create');
    // Route::get('/board/show/{id}/{slug}','showBoard')->name('board.show');
    // Route::post('/board/edit','editBoard')->name('board.edit');
});
