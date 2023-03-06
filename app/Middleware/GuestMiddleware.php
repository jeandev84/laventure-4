<?php
namespace App\Middleware;

class GuestMiddleware
{
    public function __invoke()
    {
        echo __METHOD__;
    }
}