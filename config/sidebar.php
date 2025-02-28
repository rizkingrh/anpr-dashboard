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
			'icon' => 'fa fa-user-group',
			'title' => 'User',
			'url' => '/',
		],
		[
			'icon' => 'fa fa-clock-rotate-left',
			'title' => 'History',
			'url' => '/history',
		],
		[
			'icon' => 'fa fa-user-lock',
			'title' => 'Tenants',
			'url' => '/',
		]
	]
];
