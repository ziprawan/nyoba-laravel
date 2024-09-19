<?php

use App\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Woi";
});

Route::prefix("/api")->group(function () {
    Route::get("/kuda_lompat", [Http\Controllers\ApiEndpoint::class, "index"]);
    Route::get("/pintu_biru", [Http\Controllers\ApiPintuBiru::class, "index"]);
});
