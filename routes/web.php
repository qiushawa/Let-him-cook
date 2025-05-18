<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::inertia("/", "Home")->name("home");
