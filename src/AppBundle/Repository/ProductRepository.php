<?php

// src/Acme/StoreBundle/Entity/ProductRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        echo "OK !"; exit;
        return true;
    }
}