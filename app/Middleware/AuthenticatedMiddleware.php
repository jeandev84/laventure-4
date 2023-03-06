<?php
namespace App\Middleware;

class AuthenticatedMiddleware
{
    public function __invoke()
    {
         echo __METHOD__;
    }
}