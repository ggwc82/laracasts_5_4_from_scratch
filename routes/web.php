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
	$tasks = [
		"Order pizza",
		"Order hotdogs",
		"Build a hotdog or pizza app"
	];

    return view('welcome', compact('tasks'));
});
