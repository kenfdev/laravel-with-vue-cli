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

Route::get('/app1{any}', 'SpaController@app1')->where('any', '(/?$|/.*)');
Route::get('/app2{any}', 'SpaController@app2')->where('any', '(/?$|/.*)');