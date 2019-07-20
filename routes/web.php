<?php

Route::get('/', 'HomeController@index');

Route::get('/students', 'StudentController@index');