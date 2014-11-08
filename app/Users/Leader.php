<?php namespace App\Users;

class Leader {

    public function getLeader($user)
    {
        return ($user == 'admin' OR $user == 'leader') ? true : false;
    }

}