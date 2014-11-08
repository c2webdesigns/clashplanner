<?php namespace App;

use Illuminate\Support\Facades\Auth;
use App\Users\User;
use Illuminate\Support\Facades\Route;

class Helpers {

    /**
     * Return the correct name to display
     *
     * @return mixed
     */
    public static function displayName()
    {
        return (Auth::user()->ign) ? Auth::user()->ign : Auth::user()->firstname;
    }

    /**
     * Return either ign or Facebook name
     *
     * @param $facebook_id
     * @param $facebook_name
     * @return mixed
     */
    public static function displayFacebookName($facebook_id, $facebook_name)
    {
        $user = User::where('facebook_id', '=', $facebook_id)->take(1)->get();

        return (isset($user[0]) AND $user[0]->ign) ? $user[0]->ign : $facebook_name;
    }

}