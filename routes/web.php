<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController; 


Route::get('/', function () {
    return "<h1>hello world!</h1>";
    // return view('welcome');
});

# basic route 



Route::get('/', [AppController::class, 'index']);
Route::get('/about' , [AppController::class, 'about']);

#route with perametar
// Route::get('/about/{pramname}', function() {
//    return "hello from about page";
// });

#route with oppstional perametar
// Route::get('/services/{service_name?}', function() {
//     return "hello from services page";
//  });

 #names routes
//  Route::get('/contact', "AppController@function-name")->name('contact');
