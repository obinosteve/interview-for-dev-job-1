<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/some-dummy-data', function (Request $request) {
    return response()->json('some-dummy-data');
});
