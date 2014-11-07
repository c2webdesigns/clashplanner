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
            'roles' => 'member',
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
            $user->avatar = $userData->avatar;
            $user->firstname = $userData->firstname;
            $user->lastname = $userData->lastname;
            $user->locale = $userData->locale;
            $user->timezone = $userData->timezone;
            $user->access_token = $userData->token;
            $user->save();
        }

        return $user;

    }

}