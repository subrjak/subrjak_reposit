<?php

use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', );
});
