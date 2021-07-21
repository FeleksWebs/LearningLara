<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function PostPage()
	{
		//Return all posts
		// $posts = Post::get();
		//Return a limit amount per page
		$posts = Post::paginate(2);
		return view("posts.posts", [
			"posts" => $posts
		]);
	}

	public function posts(Request $request)
	{
		$this->validate($request, [
			"body" => "required"
		]);


		#Using the current user,
		#create a new post entry to posts table
		if ($request->user()) {
			$request->user()->posts()->create([
				"body" => $request->body
			]);
		} else {
			return redirect()->route("dashboard"); //Cannot make posts if not logged in.
		}
		return back();
	}
}
