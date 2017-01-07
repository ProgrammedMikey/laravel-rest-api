<?php


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'api'], function(){
    Route::resource('meeting', 'MeetingController', [
        'except' => ['edit', 'create']
    ]);

    Route::resource('meeting/registration', 'RegistrationController', [
        'only' => ['store', 'destroy']
    ]);

    Route::post('user',[
        'uses' => 'AuthController@store'
    ]);

    Route::post('user/signin',[
        'uses' => 'AuthController@signin'
    ]);

});