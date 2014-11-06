<?php
namespace App\Interfaces;

interface AuthenticateUserListener
{
    public function userHasLoggedIn($user);
}