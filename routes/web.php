<?php

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
    return redirect('https://www.alessandrohairstudio.co.uk/', 301);
});

Route::get('/{page}', function ($page) {
    
    $page = str_replace(".html", "", $page);
    $page = str_replace("Home", "", $page);
    
    return redirect('https://www.alessandrohairstudio.co.uk/'.$page, 301);
});
