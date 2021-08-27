<?php
namespace App\Enums;
use App\Enums\Enum;
// this is a example of diversity of user's roles.
// you can have your own example.

class Example extends Enum
{	
	const CLIENT = 'client'; 
	const ADMIN = 'admin';
	const MODERATOR = 'moderator';
	const AUTHOR = 'author';

	function translations()
	{
		return [
		    static::CLIENT => 'Client User',
		    static::ADMIN => 'Aministrator',
		    static::MODERATOR => 'Moderator User',
		    static::AUTHOR => 'Blog Writer',
		];
	}

	static function adminsGroup()
	{
		return [
			Roles::ADMIN,
			Roles::MODERATOR,
		];
	}
}
