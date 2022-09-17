<?php

namespace src\Business\Services;

use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;

abstract class BaseService
{
    protected EntityManager $entityManager;

    protected function __construct(
        private ManagerRegistry $managerRegistry
    ) {
        $this->entityManager = $this->managerRegistry->getManager('default');
    }
}