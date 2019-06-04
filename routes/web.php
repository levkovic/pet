<?php

Route::get('/{any}', 'PagesController@index')->where('any', '.*');

Route:: get('/api/stats', function () {
    return json_encode([
        'total' => 200,
        'current' => 50
    ]);
});

Route::get('/test', 'PagesController@test');

Route::get('/contact', 'PagesController@contact');
// Route::get('/about', 'PagesController@about');
Route::get('/game', 'GameController@index');

Route::resource('projects', 'ProjectsController');

Route::post('/project/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
