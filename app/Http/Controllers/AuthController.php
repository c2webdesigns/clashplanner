<?php namespace App\Http\Controllers;

use App\AuthenticateUser as AuthenticateUser;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Interfaces\AuthenticateUserListener;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class AuthController extends Controller implements AuthenticateUserListener {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param  RegisterRequest  $request
	 * @return Response
	 */
	public function postRegister(RegisterRequest $request)
	{
		// Registration form is valid, create user...

		$this->auth->login($user);

		return redirect('/');
	}

	/**
	 * Show the application login form.
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return view('auth.login');
	}

	/**
	 * @param AuthenticateUser $authenticateUser
	 * @param Request $request
	 * @return mixed
     */
	public function submitLogin(AuthenticateUser $authenticateUser, Request $request)
	{
		// Authenticate user
		return $authenticateUser->execute($request->has('code'), $this);
	}

	/**
	 * @param $user
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	public function userHasLoggedIn($user)
	{
		return redirect('/wars');
	}

	/**
	 * Log the user out of the application.
	 *
	 * @return Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect('/');
	}

}
