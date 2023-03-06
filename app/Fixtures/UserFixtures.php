<?php
namespace App\Fixtures;

use DateTime;
use Laventure\Component\Database\ORM\Mapper\Manager\Contract\ObjectManager;

class UserFixtures
{

      /**
       * @param ObjectManager $manager
      */
      public function load(ObjectManager $manager)
      {
              $product = new \App\Entity\Product();
              $product->setTitle('Product 1')
                  ->setDescription('Some description 1');

              $address = (new \App\Entity\Address())
                  ->setCity('Moscow')
                  ->setStreet('Golovinskoe shosse, dom 8 k 2a');

              $user =  (new \App\Entity\User())
                  ->setName('demo')
                  ->setPhone(344444444)
                  ->setCreatedAt(new DateTime())
                  ->setAddress($address)
                  ->addProduct($product);

              $manager->persist($user);

              /*
               $manager->persist($user);
               $manager->persist($user);
               $manager->persist($user);
              */

              $manager->flush();
      }
}