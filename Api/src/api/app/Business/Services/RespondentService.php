<?php

namespace src\Business\Services;

use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use src\Data\Entities\Respondent;

final class RespondentService extends BaseService
{
    public function __construct(ManagerRegistry $managerRegistry)
    {
        parent::__construct($managerRegistry);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function save(array $requestData): void
    {
        $respondent = (new Respondent())
            ->setUniqueIdentifier($requestData['uniqueIdentifier'])
            ->setAge($requestData['age'])
            ->setGender($requestData['gender'])
            ->setEducationLevel($requestData['educationLevel'])
            ->setEmploymentStatus($requestData['employmentStatus'])
            ->setSocioEconomicStatus($requestData['socioEconomicStatus'])
            ->setResearchName($requestData['researchName']);

        $this->entityManager->persist($respondent);
        $this->entityManager->flush($respondent);
    }
}