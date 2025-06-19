<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file loads the main route definitions.
|
*/

// Load tazim routes
require __DIR__.'/tazim.php';

// Load auth routes (from Laravel Breeze or Jetstream)
require __DIR__.'/auth.php';
