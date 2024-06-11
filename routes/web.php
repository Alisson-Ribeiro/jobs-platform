<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\app\http\controllers\JobController::class, 'index']);
