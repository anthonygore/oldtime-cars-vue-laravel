<?php

Route::get('/', 'CarController@home');

Route::get('/detail/{id}', 'CarController@detail');
