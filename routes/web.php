<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;

Route::get('/', function (Request $request) {
    return inertia('Home', [
        'keyword' => $request->query('keyword'),
    ]);
})->name('home');