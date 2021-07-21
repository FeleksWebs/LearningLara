<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function __construct()
	{
		$this->middleware(["guest"]);
	}

	public function index()
	{
		return view("auth.login");
	}

	public function login(Request $request)
	{
		// validation (will throw error on page if these are not setup)
		$this->validate($request, [
			"username" => "required|max:255",
			"password" => "required",
		]);

		# Aunthenticate if that user exists in the database
		if (Auth::attempt(["username" => $request->input("username"), "password" => $request->input("password")])) {
			return redirect()->route("dashboard");
		} else {
			return back()->with("status", "Invalid Login Details");
		}
	}
}
