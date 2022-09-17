<?php

namespace src\Data\Repositories;

use Doctrine\ORM\EntityManager;

abstract class AbstractRepository
{
    public function __construct(
        protected EntityManager $em
    ) {}
}