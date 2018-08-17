<?php

Route::get('/', 'Welcome@index');
Route::get('/play/{hash}', 'Welcome@index');

Route::get('/playlist/{hash}', 'Playlist@read')->middleware(\App\Http\Middleware\VerifyHashLength::class);
Route::post('/playlist','Playlist@save');
