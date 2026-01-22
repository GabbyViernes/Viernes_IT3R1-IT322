<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Integrative Programming API is Live!!', 
        'student' => 'Gabby'
    ]);
});
