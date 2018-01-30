<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;

class LoginController extends Controller {
	/*
		    |--------------------------------------------------------------------------
		    | Login Controller
		    |--------------------------------------------------------------------------
		    |
		    | This controller handles authenticating users for the application and
		    | redirecting them to your home screen. The controller uses a trait
		    | to conveniently provide its functionality to your applications.
		    |
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest')->except('logout');
	}

	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function redirectToProvider() {
		return Socialite::driver('github')
			->scopes(['read:user', 'public_repo'])
			->redirect();
	}

	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function handleProviderCallback() {
		try {
			$user = Socialite::driver('github')
				->scopes(['read:user', 'public_repo'])
				->user();
		} catch (Exception $e) {
			return redirect('login/github');
		}

		$authUser = $this->findOrCreateUser($user);

		Auth::login($authUser, true);

		return redirect('home');
	}

	/**
	 * Return user if exists; create and return if doesn't
	 *
	 * @param $githubUser
	 * @return User
	 */
	private function findOrCreateUser($githubUser) {
		$authUser = User::where('github_id', $githubUser->id)->first();

		if ($authUser !== NULL) {
			return $authUser;
		}

		$user = User::create([
			'email' => $githubUser->getEmail(),
			'github_id' => $githubUser->getId(),
			'password' => bcrypt(str_random(6)),
		]);

		Profile::create([
			'user_id' => $user->id,
			'name' => $githubUser->getName(),
			'avatar' => $githubUser->getAvatar(),
			'experience' => 100,
			'reputation' => 1,
			'devcoins' => 1100,
		]);

		return $user;
	}

}
