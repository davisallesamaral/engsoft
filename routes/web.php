<?php

Route::get('/rests', 'RestController@index');
Route::get('/rests/users/{id}/{dailyOvertimeMultiplier}/{dailyOvertimeThreshold}/{overtime}/{weeklyOvertimeMultiplier}/{weeklyOvertimeThreshold}', 'RestController@seeUsers') ->where('id', '[0-9]+');

Route::get('/rests/locations/', 'RestController@seeLocations' );
Route::get('/rests/timepunches/{location}/{user}/{firstName}/{lastName}', 'RestController@seeTimepunches' ) 
 ->where('id', '[0-9location]+')
 ->where('user', '[0-9]+');
//Route::post('/rest/insert/', 'ProdutoController@insert' );
//Route::get('/rest/json', 'ProdutoController@listaJson');
