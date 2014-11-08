<?php namespace App\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\User as UserContract;
use Illuminate\Auth\Passwords\CanResetPasswordTrait;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Auth;

class User extends Model implements UserContract, CanResetPasswordContract {

	use UserTrait, CanResetPasswordTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * @var array
	 */
	protected $fillable = [
		'facebook_id',
		'email',
		'firstname',
		'lastname',
		'avatar',
		'roles',
		'gender',
		'facebook_link',
		'locale',
		'timezone',
		'access_token'
	];

}
