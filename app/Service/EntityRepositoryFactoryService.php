<?php
namespace App\Service;

use Laventure\Component\Database\ORM\Mapper\Repository\Factory\EntityRepositoryFactory;
use Laventure\Component\Database\ORM\Mapper\Repository\ServiceRepository;

class EntityRepositoryFactoryService extends EntityRepositoryFactory
{

    /**
     * @inheritDoc
    */
    public function createRepository(string $class): ServiceRepository
    {
         return new $class();
    }
}