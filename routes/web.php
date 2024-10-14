<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download-apk', function () {
    $file = public_path('apk/app-release.apk');
    return Response::download($file);
});
