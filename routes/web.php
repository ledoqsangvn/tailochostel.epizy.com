<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;

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
Route::group(['middleware' => 'localization'], function () {
    Route::get('/lang/{language}', [MainController::class, 'changeLanguage']);
    Route::get('/', [MainController::class, 'index']);
    Route::get('/rooms/{room_state}', [MainController::class, 'allRoom']);
    Route::get('/search', [MainController::class, 'search']);
    Route::get('/rooms/view/{id}', [MainController::class, 'viewRoom']);
    Route::get('/rooms/status/pending', [MainController::class, 'pendingRoom']);
    Route::get('/rooms/modify/rent/{id}', [MainController::class, 'rentRoom']);
    Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'postLogin']);
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/rooms/modify/add', [RoomController::class, 'addRoom']);
        Route::get('/admin', [AdminController::class, 'adminIndex']);
        Route::get('/admin/manage/rooms', [AdminController::class, 'manageRoom']);
        Route::post('/rooms/modify/add', [RoomController::class, 'postAddRoom']);
        Route::get('/rooms/modify/edit/{id}', [RoomController::class, 'edit']);
        Route::post('/rooms/modify/edit/{id}', [RoomController::class, 'postEdit']);
        Route::get('/rooms/modify/delete/{id}', [RoomController::class, 'deleteRoom']);
        Route::get('/pending/delete/{id}', [MainController::class, 'deletePending']);
        Route::get('/user/view/{id}', [AdminController::class, 'viewProfile'])->name('viewProfile');
        Route::get('/user/edit/{id}', [AdminController::class, 'editProfile']);
        Route::post('/user/update/{id}', [AdminController::class, 'updateProfile']);
        Route::get('/logout', [LoginController::class, 'logOut']);
    });
});
