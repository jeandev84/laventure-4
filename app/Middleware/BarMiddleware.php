<?php
namespace App\Middleware;

class BarMiddleware
{

     public function __invoke()
     {
         echo __METHOD__;
     }
}