<?php namespace App\Users {

    class ProvideIgn {

        /**
         * @param $user
         * @return mixed
         */
        public function checkIgn($user)
        {
            return $user->ign;
        }

    }
}