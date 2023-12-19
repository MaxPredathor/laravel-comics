<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/comics', function () {
    return view('products.index');
})->name('comics');

Route::get('/products/{id}', function ($id) {
    $comics = config('comics.key');
    //cercare prodotto con quell'id
    // if ($id >= 0 && $id < count($products)) {
    $comic = $comics[$id];

    return view('products.show', compact('comic'));
    // } else {
    //     abort(404);
    // }
})->name('products.show');
