<?php

/**
 * Basic pages
 */

get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);

get('guides', [
    'as' => 'guides_path',
    'uses' => 'PagesController@guides'
]);

get('feed', [
    'as' => 'feed_path',
    'uses' => 'PagesController@feed'
]);

/**
 * Auth
 */

get('auth/login', [
    'as' => 'auth_path',
    'uses' => 'AuthController@getLogin'
]);

get('auth/socialLogin', [
    'as' => 'social_login_path',
    'uses' => 'AuthController@submitLogin'
]);

get('auth/logout', [
    'as' => 'logout_path',
    'uses' => 'AuthController@getLogout'
]);

/**
 * Ign
 */

get('ign/create', [
    'as' => 'ign_path',
    'uses' => 'IgnController@create'
]);

post('ign/create', [
    'as' => 'ign_create_path',
    'uses' => 'IgnController@store'
]);

Route::resource('wars', 'WarsController');

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

$router->controller('auth', 'AuthController');

$router->controller('password', 'PasswordController');