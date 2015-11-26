<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * Our home page
 */

Route::get('/', function () {
    return view('pages.home');
});

/**
 *  create a resource controller for school
 */
Route::resource('school', 'SchoolController',
    ['only' => ['index', 'show']]);
