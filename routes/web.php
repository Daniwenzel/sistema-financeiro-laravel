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

	Route::view('/', 'welcome')->name('home');
    Route::post('/signup', 'UserController@postSignUp')->name('signup');
    Route::post('/signin', 'UserController@postSignIn')->name('signin');
    Route::get('/logout', 'UserController@getLogout')->name('logout');
    Route::post('/edit', function(\Illuminate\Http\Request $request) {
    	return response()->json(['mensagem' => $request['gastoId']]);
    })->name('edit');

    Route::middleware('guest')->group(function() {
    	Route::get('/dashboard', 'GastoController@getDashboard')->name('dashboard');
    	Route::post('/postgasto', 'GastoController@postGastoPost')->name('postgasto');
    	Route::get('/delete-post/{gasto_id}', 'GastoController@postGastoDelete')->name('gasto.delete');
    });