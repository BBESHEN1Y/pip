<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('series.index');
});

Route::resource('series', SeriesController::class);

Route::resource('episodes', EpisodeController::class);