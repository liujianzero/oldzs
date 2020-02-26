<?php

Route::get('/', 'PagesController@dashboard')->name('pages.dashboard');

Route::get('joins', 'JoinsController@index')->name('joins.index');
