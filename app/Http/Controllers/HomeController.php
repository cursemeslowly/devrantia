<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {
	public function __construct() {
		// $this->middleware('guest')->except('logout');
	}

	/**
	 * Show home page to logged in user.
	 */
	public function index(Request $request) {
		$user = $request->session()->pull('testUser');
		dd($user);
	}
}