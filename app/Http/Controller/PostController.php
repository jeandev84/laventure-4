<?php
namespace App\Http\Controller;

class PostController
{

    public function index(): string
    {
        return __METHOD__;
    }


    public function show($id): string
    {
        return $id . ' '. __METHOD__;
    }

}