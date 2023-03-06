<?php
namespace App\Repository;

use App\Entity\User;
use Laventure\Component\Database\ORM\Mapper\Manager\EntityManager;
use Laventure\Component\Database\ORM\Mapper\Repository\ServiceRepository;


/**
 * @method mixed findAll()
 * @method mixed find($id)
 * @method mixed findBy(array $criteria, array $orderBy = [], $offset = null, $limit = null)
 * @method mixed findOneBy(array $criteria)
*/
class UserRepository extends ServiceRepository
{

      /**
       * @param EntityManager $em
      */
      public function __construct(EntityManager $em)
      {
          parent::__construct($em, User::class);
      }
}