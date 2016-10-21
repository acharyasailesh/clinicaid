<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', ['as'=>'home',function () {
    return view('home');

}]);



Route::get('/about', ['as'=>'about',function () {
    return view('about');
}]);



Route::get('doctors',['as'=>'doctors',function(){
    return view ('doctors');
}]);

Route::get('services',['as'=>'services',function(){
    return view ('services');
}]);

Route::get('contactform',['as'=>'contactform',function(){
    return view ('contactform');
}]);

Route::get('news',['as'=>'news',function(){
    return view('news');
}]);

