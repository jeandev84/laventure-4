<?php
namespace App\Manager;

use Laventure\Component\Database\ORM\Mapper\Manager\Contract\EntityManagerInterface;

class UserManager
{

      public function __construct(protected EntityManagerInterface $em)
      {
      }
}