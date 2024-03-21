<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']); 
Route::add(['GET', 'POST'], '/employees', [Controller\Site::class, 'employees']);
Route::add(['GET', 'POST'], '/discipline', [Controller\Site::class, 'discipline']);
Route::add(['GET', 'POST'], '/attach', [Controller\Site::class, 'attaches']);
Route::add(['GET', 'POST'], '/teachers', [Controller\Site::class, 'teachers']);
Route::add(['GET', 'POST'], '/readable', [Controller\Site::class, 'readable']);
