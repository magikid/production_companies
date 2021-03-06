<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#
# This maps the restful functions to the named controller.
# See [help docs](https://laravel.com/docs/5.5/controllers#resource-controllers) for more details.
#
Route::resources([
  'actors' => 'ActorController',
  'movies' => 'MovieController',
  'production_companies' => 'ProductionCompanyController'
]);

Route::resource('roles', 'RoleController', ['only' => [
  'create', 'store', 'edit', 'update', 'destroy'
]]);
