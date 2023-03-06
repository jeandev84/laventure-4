<?php
namespace App\Config;

class Config
{
     private $params = [];


     public function __construct(string $path)
     {
         $this->params = require(realpath($path));
     }

     public function get($index)
     {
          return $this->params[$index] ?? [];
     }


     public function toArray(): array
     {
          return $this->params;
     }
}