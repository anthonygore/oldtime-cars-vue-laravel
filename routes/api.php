<?php

Route::get('/', 'CarController@home_api');

Route::get('/detail/{id}', 'CarController@detail_api');
