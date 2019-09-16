<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Cities
    Route::apiResource('cities', 'CitiesApiController');

    // Categories
    Route::apiResource('categories', 'CategoriesApiController');

    // Companies
    Route::post('companies/media', 'CompaniesApiController@storeMedia')->name('companies.storeMedia');
    Route::apiResource('companies', 'CompaniesApiController');
});
