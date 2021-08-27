<?php
namespace App\Enums;
use App\Larabookir\Enum as BaseEnum;

class Roles extends BaseEnum
{
    const CLIENT = 'client';
    const ROOT = 'root';
    const ADMIN = 'admin';
    const MODERATOR = 'moderator';
    const AUTHOR = 'author';
    const USER_SUPPORT = 'user-support';
    const ACCOUNTANT = 'accountant';
    const EXECUTIVE_USER = 'executive-user';
    const SALES = 'sales';
    const VIP = 'vip';
    const DEVELOPER = 'developer';

    function translations()
    {
        return [
            static::CLIENT => 'مشتری',
            static::ROOT => 'کاربر روت',
            static::ADMIN => 'ادمین',
            static::MODERATOR => 'سرپرست',
            static::AUTHOR => 'نویسنده',
            static::USER_SUPPORT => 'کاربر پشتیبان',
            static::ACCOUNTANT => 'کاربر مالی',
            static::EXECUTIVE_USER => 'کاربر اجرایی',
            static::SALES => 'کاربر فروش',
            static::VIP => 'مشتری ویژه',
            static::DEVELOPER => 'توسعه دهنده',
        ];
    }

	static function getWorkerRoles()
	{
		return [
			Roles::EXECUTIVE_USER,
			Roles::ACCOUNTANT,
			Roles::AUTHOR,
			Roles::USER_SUPPORT,
			Roles::SALES,
		];
	}

	static function getCompanyMembersRoles()
	{
		return array_merge(static::getWorkerRoles(), [static::ROOT, static::ADMIN, static::MODERATOR]);
	}
}