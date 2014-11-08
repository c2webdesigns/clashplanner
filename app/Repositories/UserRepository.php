<?php namespace App\Repositories;

use App\Users\User;

class UserRepository {

    /**
     * @param $userData
     * @return static
     */
    public function findByEmailOrCreate($userData)
    {

        $user = User::where('email', '=', $userData->email)->first();

        $data = [
            'facebook_id' => (int) $userData->id,
            'email' => $userData->email,
            'firstname' => $userData->user['first_name'],
            'lastname' => $userData->user['last_name'],
            'avatar' => $userData->avatar,
            'gender' => $userData->user['gender'],
            'facebook_link' => $userData->user['link'],
            'locale' => $userData->user['locale'],
            'timezone' => $userData->user['timezone'],
            'access_token' => $userData->token
        ];

        // User doesn't exist
        if ( ! $user) {
            $user = User::create($data);
        }
        else

            // User does exist
        {
            $user->firstname = $userData->user['first_name'];
            $user->lastname = $userData->user['last_name'];
            $user->avatar = $userData->avatar;
            $user->locale = $userData->user['locale'];
            $user->timezone = $userData->user['timezone'];
            $user->access_token = $userData->token;
            $user->save();
        }

        return $user;

    }

}