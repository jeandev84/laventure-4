<?php
namespace App\Http\Controller;

class FrontController
{

      public function __invoke(): string
      {
           return __METHOD__;
      }



      public function index(): string
      {
           return __METHOD__;
      }



      public function contact(): string
      {
         return __METHOD__;
      }
}