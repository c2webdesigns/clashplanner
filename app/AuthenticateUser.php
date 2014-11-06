<?php namespace App;

use App\Interfaces\AuthenticateUserListener;
use App\Repositories\UserRepository as UserRepository;
use App\Users\ProvideIgn;
use Illuminate\Contracts\Auth\Guard as Guard;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthenticateUser {

    /**
     * @var UserRepository
     */
    private $users;

    /**
     * @var Socialite
     */
    private $socialite;

    /**
     * @var Authenticator
     */
    private $auth;

    public function __construct(UserRepository $users, Socialite $socialite, Guard $auth)
    {
        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }

    /**
     * @param $hasCode
     * @param AuthenticateUserListener $listener
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function execute($hasCode, AuthenticateUserListener $listener)
    {
        if ( ! $hasCode) return $this->getAuthorizationFirst();

        $user = $this->users->findByEmailOrCreate($this->getFacebookUser());

        $this->auth->login($user, true);

        $ign = $this->checkAtLogin($user);

        if ( ! $ign)
            return redirect('/ign/create');
        else
            return $listener->userHasLoggedIn($user);

    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    private function getAuthorizationFirst()
    {
        return $this->socialite->driver('facebook')->redirect();
    }

    /**
     * @return \Laravel\Socialite\Contracts\User
     */
    private function getFacebookUser()
    {
        return $this->socialite->driver('facebook')->user();
    }

    /**
     * @param $user
     * @return mixed
     */
    private function checkAtLogin($user)
    {
        return (new ProvideIgn)->checkIgn($user);
    }

}