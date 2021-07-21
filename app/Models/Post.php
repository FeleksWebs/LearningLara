<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
	use HasFactory;

	//Has a factory in factories folder.

	protected $fillable = [
		'body',
		'user_id'
	];

	public function user()
	{
		# Create a function where Posts finds a row that belongs to a user
		return $this->belongsTo(User::class);
	}
}
