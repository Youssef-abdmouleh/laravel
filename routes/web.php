<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleContollerWithType;
use Symfony\Component\Routing\Loader\Configurator\Routes;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
use App\Models\Product;
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
Routes::get('/products/{id}', function ($id) {
    $products = Product::find($id);
})
Route::resource('articles', ArticleContollerWithType::class);