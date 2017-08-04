<?php

Route::get('/', 'CarController@home_web');

Route::get('/detail/{id}', 'CarController@detail_web');
