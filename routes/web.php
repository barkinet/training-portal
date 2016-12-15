<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Scaffolding
Auth::routes();

Route::group(['middleware'=>'auth'], function() {
  //Auth Protected Routes

  Route::group(['middleware'=>'admin'], function() {
    //Admin protected Routes
    Route::resource('/admin/vendor', 'AdminVendorController');
    Route::resource('/admin/course', 'AdminCourseController');
//    Route::get('/admin/course/{id}/edit', 'AdminCourseController@CourseEdit')->name('course.');

    Route::resource('/admin/exam', 'AdminExamController');

  });

  // Dashboard Main
  Route::get('/', 'DashboardController@index')->name('dashboard.index');

  // User invites
  Route::get('/invite', 'UserInviteController@index')->name('invite.index');
  Route::post('/invite/create', 'UserInviteController@create')->name('invite.create');
  Route::post('/invite/create/import', 'UserInviteController@import')->name('invite.import');

});
