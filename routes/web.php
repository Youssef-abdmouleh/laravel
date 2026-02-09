<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleContollerWithType;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', ['name' => 'Youssef']);
});
Route::get('/test-layout', function () {
    return view('testLayout', ['name' => 'Youssef']);
});
Route::get('/exercice', function () {
    return view('mainPage');
});
Route::resource('articles', ArticleContollerWithType::class);