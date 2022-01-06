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
    return view('Home/index');
});

Route::get('/index', function () {
    return view('Home/index');
});

Route::get('/about', function () {
    return view('Home/about');
});

Route::get('/blog', function () {
    return view('Home/blog');
});

Route::get('/blog_single', function () {
    return view('Home/blog_single');
});

Route::get('/portfolio', function () {
    return view('Home/portfolio');
});

Route::get('/contact', function () {
    return view('Home/contact');
});

