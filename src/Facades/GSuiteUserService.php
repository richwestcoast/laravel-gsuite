<?php

namespace Richwestcoast\RNLaravelGSuite\Facades;

use Richwestcoast\RNLaravelGSuite\Services\UserService;
use Illuminate\Support\Facades\Facade;

class GSuiteUserService extends Facade
{
	protected static function getFacadeAccessor()
	{
		return UserService::class;
	}
}
