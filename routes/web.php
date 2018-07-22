<?php

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'role:admin'], function () {
    Route::resource('pet-registration', 'PetRegistrationController');
    Route::resource('adoption-request', 'AdoptionRequestController');
    Route::get('adopted-pets', 'AdoptedPetsController')->name('adopted-pets.index');
    Route::get('adopted-pets/{pet}', 'AdoptedPetsController@show')->name('adopted-pets.show');

    Route::group(['prefix' => 'pet/{pet}/manage-adoption-requests', 'as' => 'pet-adoption-requests.'], function () {
        Route::get('/', 'ManagePetAdoptionRequestsController@index')->name('index');
        Route::post('/', 'ManagePetAdoptionRequestsController@approve')->name('approve');
    });

    Route::post('adoption-request/{adoptionRequest}/send-notification', 'AdoptionRequestNotificationController')->name('adoption-request-notification');

});

Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.', 'middleware' => 'role:standard'], function () {
    // Route::resource('animal-impound', 'AnimalImpoundController');
    Route::resource('pet-registration', 'PetRegistrationController');
    Route::resource('adoption-request', 'AdoptionRequestController');
    Route::post('cancel-adoption-request', 'CancelAdoptionRequestController')->name('adoption-request.cancel');
});
