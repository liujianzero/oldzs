<?php

Route::get('/', 'PagesController@root')->name('root');
Route::get('about', 'PagesController@about')->name('about');
Route::get('join', 'PagesController@join')->name('join');
Route::get('service', 'PagesController@service')->name('service');

Route::post('join/addJoin', 'PagesController@addJoin')->name('join.addJoin');
