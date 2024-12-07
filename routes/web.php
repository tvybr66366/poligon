<?php

//use Illuminate\Support\Facades\Route;


Route::get('/', function () {

});


Route::resource('rest', 'App\Http\Controllers\RestTestController')->names('restTest');
