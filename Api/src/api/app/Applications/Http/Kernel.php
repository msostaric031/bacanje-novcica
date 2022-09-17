<?php

namespace src\Applications\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Fruitcake\Cors\HandleCors as Cors;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class Kernel extends HttpKernel
{
    protected $middleware = [
        Cors::class,
        AddQueuedCookiesToResponse::class
    ];

    protected $middlewareGroups = [
        'api' => [
            Cors::class,
        ],
    ];
}