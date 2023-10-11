<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
    Route::get('account/password', 'Account\PasswordController@edit')->name('password.edit');
    Route::patch('account/password', 'Account\PasswordController@update')->name('password.edit');    
});
