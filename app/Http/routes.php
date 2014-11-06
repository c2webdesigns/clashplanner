<?php

/**
 * Basic pages
 */

get('/', [
    'as' => 'home',
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