<?php

return [

	/*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
	'menu' => [
		[
			'icon' => 'fa fa-home',
			'title' => 'Dashboard',
			'url' => '/dashboard',
			'route-name' => 'dashboard'
		],
		[
			'icon' => 'fa fa-user-group',
			'title' => 'User',
			'url' => '/user',
			'route-name' => 'user.index'
		],
		[
			'icon' => 'fa fa-clock-rotate-left',
			'title' => 'History',
			'url' => '/history',
			'route-name' => 'history.index'
		],
		[
			'icon' => 'fa fa-user-lock',
			'title' => 'Tenants',
			'url' => '/tenant',
			'route-name' => 'tenant.index'
		]
	]
];
