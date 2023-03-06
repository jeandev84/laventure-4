<?php
namespace App\Http;

class Response
{

     protected $body;
     protected $status;
     protected $headers = [];


     public function __construct($body, int $status = 200, array $headers = [])
     {
         $this->body = $body;
         $this->status = $status;
         $this->headers = $headers;
     }


     public function __toString(): string
     {
          return $this->body;
     }
}