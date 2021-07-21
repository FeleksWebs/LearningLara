<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

	public function __construct()
	{
		$this->middleware(["guest"]);
	}

	public function index()
	{
		return view("auth.register");
	}

	public function store(Request $request)
	{

		// #validation
		$this->validate($request, [
			"Username" => "required|max:255",
			"Password" => "required|confirmed",
		]);
		# Create to database
		User::create([
			"username" => $request->Username,
			"password" => Hash::make($request->Password)
		]);
		# Aunthenticate if that user exists in the database
		Auth::attempt(["username" => $request->Username, "password" => $request->Password]);
		// #redirect
		return redirect()->route("dashboard");
	}
}
