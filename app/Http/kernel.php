<?php
use App\Http\Middleware\SetLocale;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
protected $middlewareGroups = [
    'web' => [
        //resous  ...
        \App\Http\Middleware\SetLocale::class,
    ],
];