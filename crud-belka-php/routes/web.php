<?php

use LionRoute\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manage\UsersController;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::get('/', [HomeController::class, 'index']);

Route::prefix("auth", function() {
    Route::post("login", [LoginController::class, 'auth']);
});

Route::prefix('manage', function() {
    Route::post("create-users", [UsersController::class, 'createUsers']);
    Route::get("read-users", [UsersController::class, 'readUsers']);
    Route::post("update-users", [UsersController::class, 'updateUsers']);
    Route::delete("delete-users/{idusers}", [UsersController::class, 'deleteUsers']);
});