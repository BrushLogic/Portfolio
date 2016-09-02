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

Route::get('/', function () {
    //return view('welcome');
    return view('index');
});
Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
})->where([
    'lang' => 'en|es'
]);
Route::group(['middleware' => ['web']], function () { // indicamos las rutas q trabajaran con el middleware 'web'

    Route::get('/', function () {
        return view('index');
    });

    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);

});
Route::get('/ajax/get-lang', function()
{
    return Session::get('lang');
});