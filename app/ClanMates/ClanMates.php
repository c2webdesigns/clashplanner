<?php namespace App\Clanmates;

use App\Users\User;

class ClanMates {

    public function getAllClanmates()
    {
        return User::all();
    }

}