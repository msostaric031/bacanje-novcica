<?php

namespace src\Data\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table
 * @ORM\HasLifecycleCallbacks
 */
final class Respondent
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private string $uniqueIdentifier;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $gender;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $age;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $researchName;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $consentForResearch;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $educationLevel;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $employmentStatus;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $socioEconomicStatus;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $expectedPoints;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $wantedPoints;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $actualTotalPoints;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $satisfactionAfterFirstRound;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $strategyAfterFirstRound;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac01Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac01Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac02Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac02Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac03Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac03Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac04Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac04Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac05Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac05Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac06Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac06Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac07Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac07Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac08Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac08Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac09Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac09Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac10Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac10Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac11Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac11Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac12Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac12Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac13Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac13Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac14Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac14Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac15Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac15Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac16Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac16Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac17Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac17Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac18Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac18Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac19Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac19Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac20Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac20Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac21Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac21Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac22Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac22Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac23Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac23Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac24Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac24Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac25Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac25Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac26Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac26Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac27Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac27Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac28Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac28Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac29Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac29Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac30Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac30Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac31Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac31Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac32Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac32Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac33Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac33Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac34Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac34Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac35Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac35Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac36Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac36Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac37Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac37Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac38Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac38Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac39Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac39Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac40Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac40Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac41Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac41Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac42Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac42Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac43Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac43Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac44Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac44Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac45Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac45Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac46Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac46Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac47Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac47Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac48Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac48Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac49Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac49Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac50Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac50Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac51Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac51Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac52Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac52Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac53Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac53Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac54Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac54Time;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac55Choice;

    /**
     * @ORM\Column(type="string", nullable=true, length=20, options={"default":""})
     */
    private string $fac55Time;

    /**
     * @return string
     */
    public function getUniqueIdentifier(): string
    {
        return $this->uniqueIdentifier;
    }

    /**
     * @param string $uniqueIdentifier
     */
    public function setUniqueIdentifier(string $uniqueIdentifier): self
    {
        $this->uniqueIdentifier = $uniqueIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return string
     */
    public function getResearchName(): string
    {
        return $this->researchName;
    }

    /**
     * @param string $researchName
     */
    public function setResearchName(string $researchName): self
    {
        $this->researchName = $researchName;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsentForResearch(): string
    {
        return $this->consentForResearch;
    }

    /**
     * @param string $consentForResearch
     */
    public function setConsentForResearch(string $consentForResearch): self
    {
        $this->consentForResearch = $consentForResearch;

        return $this;
    }

    /**
     * @return string
     */
    public function getEducationLevel(): string
    {
        return $this->educationLevel;
    }

    /**
     * @param string $educationLevel
     */
    public function setEducationLevel(string $educationLevel): self
    {
        $this->educationLevel = $educationLevel;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentStatus(): string
    {
        return $this->employmentStatus;
    }

    /**
     * @param string $employmentStatus
     */
    public function setEmploymentStatus(string $employmentStatus): self
    {
        $this->employmentStatus = $employmentStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getSocioEconomicStatus(): string
    {
        return $this->socioEconomicStatus;
    }

    /**
     * @param string $socioEconomicStatus
     */
    public function setSocioEconomicStatus(string $socioEconomicStatus): self
    {
        $this->socioEconomicStatus = $socioEconomicStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedPoints(): string
    {
        return $this->expectedPoints;
    }

    /**
     * @param string $expectedPoints
     */
    public function setExpectedPoints(string $expectedPoints): self
    {
        $this->expectedPoints = $expectedPoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getWantedPoints(): string
    {
        return $this->wantedPoints;
    }

    /**
     * @param string $wantedPoints
     */
    public function setWantedPoints(string $wantedPoints): self
    {
        $this->wantedPoints = $wantedPoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getActualTotalPoints(): string
    {
        return $this->actualTotalPoints;
    }

    /**
     * @param string $actualTotalPoints
     */
    public function setActualTotalPoints(string $actualTotalPoints): self
    {
        $this->actualTotalPoints = $actualTotalPoints;

        return $this;
    }

    /**
     * @return string
     */
    public function getSatisfactionAfterFirstRound(): string
    {
        return $this->satisfactionAfterFirstRound;
    }

    /**
     * @param string $satisfactionAfterFirstRound
     */
    public function setSatisfactionAfterFirstRound(string $satisfactionAfterFirstRound): self
    {
        $this->satisfactionAfterFirstRound = $satisfactionAfterFirstRound;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrategyAfterFirstRound(): string
    {
        return $this->strategyAfterFirstRound;
    }

    /**
     * @param string $strategyAfterFirstRound
     */
    public function setStrategyAfterFirstRound(string $strategyAfterFirstRound): self
    {
        $this->strategyAfterFirstRound = $strategyAfterFirstRound;

        return $this;
    }

    /**
     * @return string
     */
    public function getFac01Choice(): string
    {
        return $this->fac01Choice;
    }

    /**
     * @param string $fac01Choice
     */
    public function setFac01Choice(string $fac01Choice): void
    {
        $this->fac01Choice = $fac01Choice;
    }

    /**
     * @return string
     */
    public function getFac01Time(): string
    {
        return $this->fac01Time;
    }

    /**
     * @param string $fac01Time
     */
    public function setFac01Time(string $fac01Time): void
    {
        $this->fac01Time = $fac01Time;
    }

    /**
     * @return string
     */
    public function getFac02Choice(): string
    {
        return $this->fac02Choice;
    }

    /**
     * @param string $fac02Choice
     */
    public function setFac02Choice(string $fac02Choice): void
    {
        $this->fac02Choice = $fac02Choice;
    }

    /**
     * @return string
     */
    public function getFac02Time(): string
    {
        return $this->fac02Time;
    }

    /**
     * @param string $fac02Time
     */
    public function setFac02Time(string $fac02Time): void
    {
        $this->fac02Time = $fac02Time;
    }

    /**
     * @return string
     */
    public function getFac03Choice(): string
    {
        return $this->fac03Choice;
    }

    /**
     * @param string $fac03Choice
     */
    public function setFac03Choice(string $fac03Choice): void
    {
        $this->fac03Choice = $fac03Choice;
    }

    /**
     * @return string
     */
    public function getFac03Time(): string
    {
        return $this->fac03Time;
    }

    /**
     * @param string $fac03Time
     */
    public function setFac03Time(string $fac03Time): void
    {
        $this->fac03Time = $fac03Time;
    }

    /**
     * @return string
     */
    public function getFac04Choice(): string
    {
        return $this->fac04Choice;
    }

    /**
     * @param string $fac04Choice
     */
    public function setFac04Choice(string $fac04Choice): void
    {
        $this->fac04Choice = $fac04Choice;
    }

    /**
     * @return string
     */
    public function getFac04Time(): string
    {
        return $this->fac04Time;
    }

    /**
     * @param string $fac04Time
     */
    public function setFac04Time(string $fac04Time): void
    {
        $this->fac04Time = $fac04Time;
    }

    /**
     * @return string
     */
    public function getFac05Choice(): string
    {
        return $this->fac05Choice;
    }

    /**
     * @param string $fac05Choice
     */
    public function setFac05Choice(string $fac05Choice): void
    {
        $this->fac05Choice = $fac05Choice;
    }

    /**
     * @return string
     */
    public function getFac05Time(): string
    {
        return $this->fac05Time;
    }

    /**
     * @param string $fac05Time
     */
    public function setFac05Time(string $fac05Time): void
    {
        $this->fac05Time = $fac05Time;
    }

    /**
     * @return string
     */
    public function getFac06Choice(): string
    {
        return $this->fac06Choice;
    }

    /**
     * @param string $fac06Choice
     */
    public function setFac06Choice(string $fac06Choice): void
    {
        $this->fac06Choice = $fac06Choice;
    }

    /**
     * @return string
     */
    public function getFac06Time(): string
    {
        return $this->fac06Time;
    }

    /**
     * @param string $fac06Time
     */
    public function setFac06Time(string $fac06Time): void
    {
        $this->fac06Time = $fac06Time;
    }

    /**
     * @return string
     */
    public function getFac07Choice(): string
    {
        return $this->fac07Choice;
    }

    /**
     * @param string $fac07Choice
     */
    public function setFac07Choice(string $fac07Choice): void
    {
        $this->fac07Choice = $fac07Choice;
    }

    /**
     * @return string
     */
    public function getFac07Time(): string
    {
        return $this->fac07Time;
    }

    /**
     * @param string $fac07Time
     */
    public function setFac07Time(string $fac07Time): void
    {
        $this->fac07Time = $fac07Time;
    }

    /**
     * @return string
     */
    public function getFac08Choice(): string
    {
        return $this->fac08Choice;
    }

    /**
     * @param string $fac08Choice
     */
    public function setFac08Choice(string $fac08Choice): void
    {
        $this->fac08Choice = $fac08Choice;
    }

    /**
     * @return string
     */
    public function getFac08Time(): string
    {
        return $this->fac08Time;
    }

    /**
     * @param string $fac08Time
     */
    public function setFac08Time(string $fac08Time): void
    {
        $this->fac08Time = $fac08Time;
    }

    /**
     * @return string
     */
    public function getFac09Choice(): string
    {
        return $this->fac09Choice;
    }

    /**
     * @param string $fac09Choice
     */
    public function setFac09Choice(string $fac09Choice): void
    {
        $this->fac09Choice = $fac09Choice;
    }

    /**
     * @return string
     */
    public function getFac09Time(): string
    {
        return $this->fac09Time;
    }

    /**
     * @param string $fac09Time
     */
    public function setFac09Time(string $fac09Time): void
    {
        $this->fac09Time = $fac09Time;
    }

    /**
     * @return string
     */
    public function getFac10Choice(): string
    {
        return $this->fac10Choice;
    }

    /**
     * @param string $fac10Choice
     */
    public function setFac10Choice(string $fac10Choice): void
    {
        $this->fac10Choice = $fac10Choice;
    }

    /**
     * @return string
     */
    public function getFac10Time(): string
    {
        return $this->fac10Time;
    }

    /**
     * @param string $fac10Time
     */
    public function setFac10Time(string $fac10Time): void
    {
        $this->fac10Time = $fac10Time;
    }

    /**
     * @return string
     */
    public function getFac11Choice(): string
    {
        return $this->fac11Choice;
    }

    /**
     * @param string $fac11Choice
     */
    public function setFac11Choice(string $fac11Choice): void
    {
        $this->fac11Choice = $fac11Choice;
    }

    /**
     * @return string
     */
    public function getFac11Time(): string
    {
        return $this->fac11Time;
    }

    /**
     * @param string $fac11Time
     */
    public function setFac11Time(string $fac11Time): void
    {
        $this->fac11Time = $fac11Time;
    }

    /**
     * @return string
     */
    public function getFac12Choice(): string
    {
        return $this->fac12Choice;
    }

    /**
     * @param string $fac12Choice
     */
    public function setFac12Choice(string $fac12Choice): void
    {
        $this->fac12Choice = $fac12Choice;
    }

    /**
     * @return string
     */
    public function getFac12Time(): string
    {
        return $this->fac12Time;
    }

    /**
     * @param string $fac12Time
     */
    public function setFac12Time(string $fac12Time): void
    {
        $this->fac12Time = $fac12Time;
    }

    /**
     * @return string
     */
    public function getFac13Choice(): string
    {
        return $this->fac13Choice;
    }

    /**
     * @param string $fac13Choice
     */
    public function setFac13Choice(string $fac13Choice): void
    {
        $this->fac13Choice = $fac13Choice;
    }

    /**
     * @return string
     */
    public function getFac13Time(): string
    {
        return $this->fac13Time;
    }

    /**
     * @param string $fac13Time
     */
    public function setFac13Time(string $fac13Time): void
    {
        $this->fac13Time = $fac13Time;
    }

    /**
     * @return string
     */
    public function getFac14Choice(): string
    {
        return $this->fac14Choice;
    }

    /**
     * @param string $fac14Choice
     */
    public function setFac14Choice(string $fac14Choice): void
    {
        $this->fac14Choice = $fac14Choice;
    }

    /**
     * @return string
     */
    public function getFac14Time(): string
    {
        return $this->fac14Time;
    }

    /**
     * @param string $fac14Time
     */
    public function setFac14Time(string $fac14Time): void
    {
        $this->fac14Time = $fac14Time;
    }

    /**
     * @return string
     */
    public function getFac15Choice(): string
    {
        return $this->fac15Choice;
    }

    /**
     * @param string $fac15Choice
     */
    public function setFac15Choice(string $fac15Choice): void
    {
        $this->fac15Choice = $fac15Choice;
    }

    /**
     * @return string
     */
    public function getFac15Time(): string
    {
        return $this->fac15Time;
    }

    /**
     * @param string $fac15Time
     */
    public function setFac15Time(string $fac15Time): void
    {
        $this->fac15Time = $fac15Time;
    }

    /**
     * @return string
     */
    public function getFac16Choice(): string
    {
        return $this->fac16Choice;
    }

    /**
     * @param string $fac16Choice
     */
    public function setFac16Choice(string $fac16Choice): void
    {
        $this->fac16Choice = $fac16Choice;
    }

    /**
     * @return string
     */
    public function getFac16Time(): string
    {
        return $this->fac16Time;
    }

    /**
     * @param string $fac16Time
     */
    public function setFac16Time(string $fac16Time): void
    {
        $this->fac16Time = $fac16Time;
    }

    /**
     * @return string
     */
    public function getFac17Choice(): string
    {
        return $this->fac17Choice;
    }

    /**
     * @param string $fac17Choice
     */
    public function setFac17Choice(string $fac17Choice): void
    {
        $this->fac17Choice = $fac17Choice;
    }

    /**
     * @return string
     */
    public function getFac17Time(): string
    {
        return $this->fac17Time;
    }

    /**
     * @param string $fac17Time
     */
    public function setFac17Time(string $fac17Time): void
    {
        $this->fac17Time = $fac17Time;
    }

    /**
     * @return string
     */
    public function getFac18Choice(): string
    {
        return $this->fac18Choice;
    }

    /**
     * @param string $fac18Choice
     */
    public function setFac18Choice(string $fac18Choice): void
    {
        $this->fac18Choice = $fac18Choice;
    }

    /**
     * @return string
     */
    public function getFac18Time(): string
    {
        return $this->fac18Time;
    }

    /**
     * @param string $fac18Time
     */
    public function setFac18Time(string $fac18Time): void
    {
        $this->fac18Time = $fac18Time;
    }

    /**
     * @return string
     */
    public function getFac19Choice(): string
    {
        return $this->fac19Choice;
    }

    /**
     * @param string $fac19Choice
     */
    public function setFac19Choice(string $fac19Choice): void
    {
        $this->fac19Choice = $fac19Choice;
    }

    /**
     * @return string
     */
    public function getFac19Time(): string
    {
        return $this->fac19Time;
    }

    /**
     * @param string $fac19Time
     */
    public function setFac19Time(string $fac19Time): void
    {
        $this->fac19Time = $fac19Time;
    }

    /**
     * @return string
     */
    public function getFac20Choice(): string
    {
        return $this->fac20Choice;
    }

    /**
     * @param string $fac20Choice
     */
    public function setFac20Choice(string $fac20Choice): void
    {
        $this->fac20Choice = $fac20Choice;
    }

    /**
     * @return string
     */
    public function getFac20Time(): string
    {
        return $this->fac20Time;
    }

    /**
     * @param string $fac20Time
     */
    public function setFac20Time(string $fac20Time): void
    {
        $this->fac20Time = $fac20Time;
    }

    /**
     * @return string
     */
    public function getFac21Choice(): string
    {
        return $this->fac21Choice;
    }

    /**
     * @param string $fac21Choice
     */
    public function setFac21Choice(string $fac21Choice): void
    {
        $this->fac21Choice = $fac21Choice;
    }

    /**
     * @return string
     */
    public function getFac21Time(): string
    {
        return $this->fac21Time;
    }

    /**
     * @param string $fac21Time
     */
    public function setFac21Time(string $fac21Time): void
    {
        $this->fac21Time = $fac21Time;
    }

    /**
     * @return string
     */
    public function getFac22Choice(): string
    {
        return $this->fac22Choice;
    }

    /**
     * @param string $fac22Choice
     */
    public function setFac22Choice(string $fac22Choice): void
    {
        $this->fac22Choice = $fac22Choice;
    }

    /**
     * @return string
     */
    public function getFac22Time(): string
    {
        return $this->fac22Time;
    }

    /**
     * @param string $fac22Time
     */
    public function setFac22Time(string $fac22Time): void
    {
        $this->fac22Time = $fac22Time;
    }

    /**
     * @return string
     */
    public function getFac23Choice(): string
    {
        return $this->fac23Choice;
    }

    /**
     * @param string $fac23Choice
     */
    public function setFac23Choice(string $fac23Choice): void
    {
        $this->fac23Choice = $fac23Choice;
    }

    /**
     * @return string
     */
    public function getFac23Time(): string
    {
        return $this->fac23Time;
    }

    /**
     * @param string $fac23Time
     */
    public function setFac23Time(string $fac23Time): void
    {
        $this->fac23Time = $fac23Time;
    }

    /**
     * @return string
     */
    public function getFac24Choice(): string
    {
        return $this->fac24Choice;
    }

    /**
     * @param string $fac24Choice
     */
    public function setFac24Choice(string $fac24Choice): void
    {
        $this->fac24Choice = $fac24Choice;
    }

    /**
     * @return string
     */
    public function getFac24Time(): string
    {
        return $this->fac24Time;
    }

    /**
     * @param string $fac24Time
     */
    public function setFac24Time(string $fac24Time): void
    {
        $this->fac24Time = $fac24Time;
    }

    /**
     * @return string
     */
    public function getFac25Choice(): string
    {
        return $this->fac25Choice;
    }

    /**
     * @param string $fac25Choice
     */
    public function setFac25Choice(string $fac25Choice): void
    {
        $this->fac25Choice = $fac25Choice;
    }

    /**
     * @return string
     */
    public function getFac25Time(): string
    {
        return $this->fac25Time;
    }

    /**
     * @param string $fac25Time
     */
    public function setFac25Time(string $fac25Time): void
    {
        $this->fac25Time = $fac25Time;
    }

    /**
     * @return string
     */
    public function getFac26Choice(): string
    {
        return $this->fac26Choice;
    }

    /**
     * @param string $fac26Choice
     */
    public function setFac26Choice(string $fac26Choice): void
    {
        $this->fac26Choice = $fac26Choice;
    }

    /**
     * @return string
     */
    public function getFac26Time(): string
    {
        return $this->fac26Time;
    }

    /**
     * @param string $fac26Time
     */
    public function setFac26Time(string $fac26Time): void
    {
        $this->fac26Time = $fac26Time;
    }

    /**
     * @return string
     */
    public function getFac27Choice(): string
    {
        return $this->fac27Choice;
    }

    /**
     * @param string $fac27Choice
     */
    public function setFac27Choice(string $fac27Choice): void
    {
        $this->fac27Choice = $fac27Choice;
    }

    /**
     * @return string
     */
    public function getFac27Time(): string
    {
        return $this->fac27Time;
    }

    /**
     * @param string $fac27Time
     */
    public function setFac27Time(string $fac27Time): void
    {
        $this->fac27Time = $fac27Time;
    }

    /**
     * @return string
     */
    public function getFac28Choice(): string
    {
        return $this->fac28Choice;
    }

    /**
     * @param string $fac28Choice
     */
    public function setFac28Choice(string $fac28Choice): void
    {
        $this->fac28Choice = $fac28Choice;
    }

    /**
     * @return string
     */
    public function getFac28Time(): string
    {
        return $this->fac28Time;
    }

    /**
     * @param string $fac28Time
     */
    public function setFac28Time(string $fac28Time): void
    {
        $this->fac28Time = $fac28Time;
    }

    /**
     * @return string
     */
    public function getFac29Choice(): string
    {
        return $this->fac29Choice;
    }

    /**
     * @param string $fac29Choice
     */
    public function setFac29Choice(string $fac29Choice): void
    {
        $this->fac29Choice = $fac29Choice;
    }

    /**
     * @return string
     */
    public function getFac29Time(): string
    {
        return $this->fac29Time;
    }

    /**
     * @param string $fac29Time
     */
    public function setFac29Time(string $fac29Time): void
    {
        $this->fac29Time = $fac29Time;
    }

    /**
     * @return string
     */
    public function getFac30Choice(): string
    {
        return $this->fac30Choice;
    }

    /**
     * @param string $fac30Choice
     */
    public function setFac30Choice(string $fac30Choice): void
    {
        $this->fac30Choice = $fac30Choice;
    }

    /**
     * @return string
     */
    public function getFac30Time(): string
    {
        return $this->fac30Time;
    }

    /**
     * @param string $fac30Time
     */
    public function setFac30Time(string $fac30Time): void
    {
        $this->fac30Time = $fac30Time;
    }

    /**
     * @return string
     */
    public function getFac31Choice(): string
    {
        return $this->fac31Choice;
    }

    /**
     * @param string $fac31Choice
     */
    public function setFac31Choice(string $fac31Choice): void
    {
        $this->fac31Choice = $fac31Choice;
    }

    /**
     * @return string
     */
    public function getFac31Time(): string
    {
        return $this->fac31Time;
    }

    /**
     * @param string $fac31Time
     */
    public function setFac31Time(string $fac31Time): void
    {
        $this->fac31Time = $fac31Time;
    }

    /**
     * @return string
     */
    public function getFac32Choice(): string
    {
        return $this->fac32Choice;
    }

    /**
     * @param string $fac32Choice
     */
    public function setFac32Choice(string $fac32Choice): void
    {
        $this->fac32Choice = $fac32Choice;
    }

    /**
     * @return string
     */
    public function getFac32Time(): string
    {
        return $this->fac32Time;
    }

    /**
     * @param string $fac32Time
     */
    public function setFac32Time(string $fac32Time): void
    {
        $this->fac32Time = $fac32Time;
    }

    /**
     * @return string
     */
    public function getFac33Choice(): string
    {
        return $this->fac33Choice;
    }

    /**
     * @param string $fac33Choice
     */
    public function setFac33Choice(string $fac33Choice): void
    {
        $this->fac33Choice = $fac33Choice;
    }

    /**
     * @return string
     */
    public function getFac33Time(): string
    {
        return $this->fac33Time;
    }

    /**
     * @param string $fac33Time
     */
    public function setFac33Time(string $fac33Time): void
    {
        $this->fac33Time = $fac33Time;
    }

    /**
     * @return string
     */
    public function getFac34Choice(): string
    {
        return $this->fac34Choice;
    }

    /**
     * @param string $fac34Choice
     */
    public function setFac34Choice(string $fac34Choice): void
    {
        $this->fac34Choice = $fac34Choice;
    }

    /**
     * @return string
     */
    public function getFac34Time(): string
    {
        return $this->fac34Time;
    }

    /**
     * @param string $fac34Time
     */
    public function setFac34Time(string $fac34Time): void
    {
        $this->fac34Time = $fac34Time;
    }

    /**
     * @return string
     */
    public function getFac35Choice(): string
    {
        return $this->fac35Choice;
    }

    /**
     * @param string $fac35Choice
     */
    public function setFac35Choice(string $fac35Choice): void
    {
        $this->fac35Choice = $fac35Choice;
    }

    /**
     * @return string
     */
    public function getFac35Time(): string
    {
        return $this->fac35Time;
    }

    /**
     * @param string $fac35Time
     */
    public function setFac35Time(string $fac35Time): void
    {
        $this->fac35Time = $fac35Time;
    }

    /**
     * @return string
     */
    public function getFac36Choice(): string
    {
        return $this->fac36Choice;
    }

    /**
     * @param string $fac36Choice
     */
    public function setFac36Choice(string $fac36Choice): void
    {
        $this->fac36Choice = $fac36Choice;
    }

    /**
     * @return string
     */
    public function getFac36Time(): string
    {
        return $this->fac36Time;
    }

    /**
     * @param string $fac36Time
     */
    public function setFac36Time(string $fac36Time): void
    {
        $this->fac36Time = $fac36Time;
    }

    /**
     * @return string
     */
    public function getFac37Choice(): string
    {
        return $this->fac37Choice;
    }

    /**
     * @param string $fac37Choice
     */
    public function setFac37Choice(string $fac37Choice): void
    {
        $this->fac37Choice = $fac37Choice;
    }

    /**
     * @return string
     */
    public function getFac37Time(): string
    {
        return $this->fac37Time;
    }

    /**
     * @param string $fac37Time
     */
    public function setFac37Time(string $fac37Time): void
    {
        $this->fac37Time = $fac37Time;
    }

    /**
     * @return string
     */
    public function getFac38Choice(): string
    {
        return $this->fac38Choice;
    }

    /**
     * @param string $fac38Choice
     */
    public function setFac38Choice(string $fac38Choice): void
    {
        $this->fac38Choice = $fac38Choice;
    }

    /**
     * @return string
     */
    public function getFac38Time(): string
    {
        return $this->fac38Time;
    }

    /**
     * @param string $fac38Time
     */
    public function setFac38Time(string $fac38Time): void
    {
        $this->fac38Time = $fac38Time;
    }

    /**
     * @return string
     */
    public function getFac39Choice(): string
    {
        return $this->fac39Choice;
    }

    /**
     * @param string $fac39Choice
     */
    public function setFac39Choice(string $fac39Choice): void
    {
        $this->fac39Choice = $fac39Choice;
    }

    /**
     * @return string
     */
    public function getFac39Time(): string
    {
        return $this->fac39Time;
    }

    /**
     * @param string $fac39Time
     */
    public function setFac39Time(string $fac39Time): void
    {
        $this->fac39Time = $fac39Time;
    }

    /**
     * @return string
     */
    public function getFac40Choice(): string
    {
        return $this->fac40Choice;
    }

    /**
     * @param string $fac40Choice
     */
    public function setFac40Choice(string $fac40Choice): void
    {
        $this->fac40Choice = $fac40Choice;
    }

    /**
     * @return string
     */
    public function getFac40Time(): string
    {
        return $this->fac40Time;
    }

    /**
     * @param string $fac40Time
     */
    public function setFac40Time(string $fac40Time): void
    {
        $this->fac40Time = $fac40Time;
    }

    /**
     * @return string
     */
    public function getFac41Choice(): string
    {
        return $this->fac41Choice;
    }

    /**
     * @param string $fac41Choice
     */
    public function setFac41Choice(string $fac41Choice): void
    {
        $this->fac41Choice = $fac41Choice;
    }

    /**
     * @return string
     */
    public function getFac41Time(): string
    {
        return $this->fac41Time;
    }

    /**
     * @param string $fac41Time
     */
    public function setFac41Time(string $fac41Time): void
    {
        $this->fac41Time = $fac41Time;
    }

    /**
     * @return string
     */
    public function getFac42Choice(): string
    {
        return $this->fac42Choice;
    }

    /**
     * @param string $fac42Choice
     */
    public function setFac42Choice(string $fac42Choice): void
    {
        $this->fac42Choice = $fac42Choice;
    }

    /**
     * @return string
     */
    public function getFac42Time(): string
    {
        return $this->fac42Time;
    }

    /**
     * @param string $fac42Time
     */
    public function setFac42Time(string $fac42Time): void
    {
        $this->fac42Time = $fac42Time;
    }

    /**
     * @return string
     */
    public function getFac43Choice(): string
    {
        return $this->fac43Choice;
    }

    /**
     * @param string $fac43Choice
     */
    public function setFac43Choice(string $fac43Choice): void
    {
        $this->fac43Choice = $fac43Choice;
    }

    /**
     * @return string
     */
    public function getFac43Time(): string
    {
        return $this->fac43Time;
    }

    /**
     * @param string $fac43Time
     */
    public function setFac43Time(string $fac43Time): void
    {
        $this->fac43Time = $fac43Time;
    }

    /**
     * @return string
     */
    public function getFac44Choice(): string
    {
        return $this->fac44Choice;
    }

    /**
     * @param string $fac44Choice
     */
    public function setFac44Choice(string $fac44Choice): void
    {
        $this->fac44Choice = $fac44Choice;
    }

    /**
     * @return string
     */
    public function getFac44Time(): string
    {
        return $this->fac44Time;
    }

    /**
     * @param string $fac44Time
     */
    public function setFac44Time(string $fac44Time): void
    {
        $this->fac44Time = $fac44Time;
    }

    /**
     * @return string
     */
    public function getFac45Choice(): string
    {
        return $this->fac45Choice;
    }

    /**
     * @param string $fac45Choice
     */
    public function setFac45Choice(string $fac45Choice): void
    {
        $this->fac45Choice = $fac45Choice;
    }

    /**
     * @return string
     */
    public function getFac45Time(): string
    {
        return $this->fac45Time;
    }

    /**
     * @param string $fac45Time
     */
    public function setFac45Time(string $fac45Time): void
    {
        $this->fac45Time = $fac45Time;
    }

    /**
     * @return string
     */
    public function getFac46Choice(): string
    {
        return $this->fac46Choice;
    }

    /**
     * @param string $fac46Choice
     */
    public function setFac46Choice(string $fac46Choice): void
    {
        $this->fac46Choice = $fac46Choice;
    }

    /**
     * @return string
     */
    public function getFac46Time(): string
    {
        return $this->fac46Time;
    }

    /**
     * @param string $fac46Time
     */
    public function setFac46Time(string $fac46Time): void
    {
        $this->fac46Time = $fac46Time;
    }

    /**
     * @return string
     */
    public function getFac47Choice(): string
    {
        return $this->fac47Choice;
    }

    /**
     * @param string $fac47Choice
     */
    public function setFac47Choice(string $fac47Choice): void
    {
        $this->fac47Choice = $fac47Choice;
    }

    /**
     * @return string
     */
    public function getFac47Time(): string
    {
        return $this->fac47Time;
    }

    /**
     * @param string $fac47Time
     */
    public function setFac47Time(string $fac47Time): void
    {
        $this->fac47Time = $fac47Time;
    }

    /**
     * @return string
     */
    public function getFac48Choice(): string
    {
        return $this->fac48Choice;
    }

    /**
     * @param string $fac48Choice
     */
    public function setFac48Choice(string $fac48Choice): void
    {
        $this->fac48Choice = $fac48Choice;
    }

    /**
     * @return string
     */
    public function getFac48Time(): string
    {
        return $this->fac48Time;
    }

    /**
     * @param string $fac48Time
     */
    public function setFac48Time(string $fac48Time): void
    {
        $this->fac48Time = $fac48Time;
    }

    /**
     * @return string
     */
    public function getFac49Choice(): string
    {
        return $this->fac49Choice;
    }

    /**
     * @param string $fac49Choice
     */
    public function setFac49Choice(string $fac49Choice): void
    {
        $this->fac49Choice = $fac49Choice;
    }

    /**
     * @return string
     */
    public function getFac49Time(): string
    {
        return $this->fac49Time;
    }

    /**
     * @param string $fac49Time
     */
    public function setFac49Time(string $fac49Time): void
    {
        $this->fac49Time = $fac49Time;
    }

    /**
     * @return string
     */
    public function getFac50Choice(): string
    {
        return $this->fac50Choice;
    }

    /**
     * @param string $fac50Choice
     */
    public function setFac50Choice(string $fac50Choice): void
    {
        $this->fac50Choice = $fac50Choice;
    }

    /**
     * @return string
     */
    public function getFac50Time(): string
    {
        return $this->fac50Time;
    }

    /**
     * @param string $fac50Time
     */
    public function setFac50Time(string $fac50Time): void
    {
        $this->fac50Time = $fac50Time;
    }

    /**
     * @return string
     */
    public function getFac51Choice(): string
    {
        return $this->fac51Choice;
    }

    /**
     * @param string $fac51Choice
     */
    public function setFac51Choice(string $fac51Choice): void
    {
        $this->fac51Choice = $fac51Choice;
    }

    /**
     * @return string
     */
    public function getFac51Time(): string
    {
        return $this->fac51Time;
    }

    /**
     * @param string $fac51Time
     */
    public function setFac51Time(string $fac51Time): void
    {
        $this->fac51Time = $fac51Time;
    }

    /**
     * @return string
     */
    public function getFac52Choice(): string
    {
        return $this->fac52Choice;
    }

    /**
     * @param string $fac52Choice
     */
    public function setFac52Choice(string $fac52Choice): void
    {
        $this->fac52Choice = $fac52Choice;
    }

    /**
     * @return string
     */
    public function getFac52Time(): string
    {
        return $this->fac52Time;
    }

    /**
     * @param string $fac52Time
     */
    public function setFac52Time(string $fac52Time): void
    {
        $this->fac52Time = $fac52Time;
    }

    /**
     * @return string
     */
    public function getFac53Choice(): string
    {
        return $this->fac53Choice;
    }

    /**
     * @param string $fac53Choice
     */
    public function setFac53Choice(string $fac53Choice): void
    {
        $this->fac53Choice = $fac53Choice;
    }

    /**
     * @return string
     */
    public function getFac53Time(): string
    {
        return $this->fac53Time;
    }

    /**
     * @param string $fac53Time
     */
    public function setFac53Time(string $fac53Time): void
    {
        $this->fac53Time = $fac53Time;
    }

    /**
     * @return string
     */
    public function getFac54Choice(): string
    {
        return $this->fac54Choice;
    }

    /**
     * @param string $fac54Choice
     */
    public function setFac54Choice(string $fac54Choice): void
    {
        $this->fac54Choice = $fac54Choice;
    }

    /**
     * @return string
     */
    public function getFac54Time(): string
    {
        return $this->fac54Time;
    }

    /**
     * @param string $fac54Time
     */
    public function setFac54Time(string $fac54Time): void
    {
        $this->fac54Time = $fac54Time;
    }

    /**
     * @return string
     */
    public function getFac55Choice(): string
    {
        return $this->fac55Choice;
    }

    /**
     * @param string $fac55Choice
     */
    public function setFac55Choice(string $fac55Choice): void
    {
        $this->fac55Choice = $fac55Choice;
    }

    /**
     * @return string
     */
    public function getFac55Time(): string
    {
        return $this->fac55Time;
    }

    /**
     * @param string $fac55Time
     */
    public function setFac55Time(string $fac55Time): void
    {
        $this->fac55Time = $fac55Time;
    }
}