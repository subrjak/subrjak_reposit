<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/create_user', [UserController::class, 'createUser']);