<?php
namespace App\Middleware;

class FooMiddleware
{
     public function __invoke()
     {
         echo __METHOD__;
     }
}