<?php

namespace Database\Migrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema as Schema;

class Version20220912151449 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema): void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('CREATE TABLE respondents (unique_identifier VARCHAR(20) NOT NULL, gender VARCHAR(20) NOT NULL, age VARCHAR(20) NOT NULL, research_name VARCHAR(20) NOT NULL, consent_for_research VARCHAR(20) NOT NULL, education_level VARCHAR(20) NOT NULL, employment_status VARCHAR(20) NOT NULL, socio_economic_status VARCHAR(20) NOT NULL, expected_points VARCHAR(20) NOT NULL, wanted_points VARCHAR(20) NOT NULL, actual_total_points VARCHAR(20) NOT NULL, satisfaction_after_first_round VARCHAR(20) NOT NULL, strategy_after_first_round VARCHAR(20) NOT NULL, fac01_choice VARCHAR(20) NOT NULL, fac01_time VARCHAR(20) NOT NULL, fac02_choice VARCHAR(20) NOT NULL, fac02_time VARCHAR(20) NOT NULL, fac03_choice VARCHAR(20) NOT NULL, fac03_time VARCHAR(20) NOT NULL, fac04_choice VARCHAR(20) NOT NULL, fac04_time VARCHAR(20) NOT NULL, fac05_choice VARCHAR(20) NOT NULL, fac05_time VARCHAR(20) NOT NULL, fac06_choice VARCHAR(20) NOT NULL, fac06_time VARCHAR(20) NOT NULL, fac07_choice VARCHAR(20) NOT NULL, fac07_time VARCHAR(20) NOT NULL, fac08_choice VARCHAR(20) NOT NULL, fac08_time VARCHAR(20) NOT NULL, fac09_choice VARCHAR(20) NOT NULL, fac09_time VARCHAR(20) NOT NULL, fac10_choice VARCHAR(20) NOT NULL, fac10_time VARCHAR(20) NOT NULL, fac11_choice VARCHAR(20) NOT NULL, fac11_time VARCHAR(20) NOT NULL, fac12_choice VARCHAR(20) NOT NULL, fac12_time VARCHAR(20) NOT NULL, fac13_choice VARCHAR(20) NOT NULL, fac13_time VARCHAR(20) NOT NULL, fac14_choice VARCHAR(20) NOT NULL, fac14_time VARCHAR(20) NOT NULL, fac15_choice VARCHAR(20) NOT NULL, fac15_time VARCHAR(20) NOT NULL, fac16_choice VARCHAR(20) NOT NULL, fac16_time VARCHAR(20) NOT NULL, fac17_choice VARCHAR(20) NOT NULL, fac17_time VARCHAR(20) NOT NULL, fac18_choice VARCHAR(20) NOT NULL, fac18_time VARCHAR(20) NOT NULL, fac19_choice VARCHAR(20) NOT NULL, fac19_time VARCHAR(20) NOT NULL, fac20_choice VARCHAR(20) NOT NULL, fac20_time VARCHAR(20) NOT NULL, fac21_choice VARCHAR(20) NOT NULL, fac21_time VARCHAR(20) NOT NULL, fac22_choice VARCHAR(20) NOT NULL, fac22_time VARCHAR(20) NOT NULL, fac23_choice VARCHAR(20) NOT NULL, fac23_time VARCHAR(20) NOT NULL, fac24_choice VARCHAR(20) NOT NULL, fac24_time VARCHAR(20) NOT NULL, fac25_choice VARCHAR(20) NOT NULL, fac25_time VARCHAR(20) NOT NULL, fac26_choice VARCHAR(20) NOT NULL, fac26_time VARCHAR(20) NOT NULL, fac27_choice VARCHAR(20) NOT NULL, fac27_time VARCHAR(20) NOT NULL, fac28_choice VARCHAR(20) NOT NULL, fac28_time VARCHAR(20) NOT NULL, fac29_choice VARCHAR(20) NOT NULL, fac29_time VARCHAR(20) NOT NULL, fac30_choice VARCHAR(20) NOT NULL, fac30_time VARCHAR(20) NOT NULL, fac31_choice VARCHAR(20) NOT NULL, fac31_time VARCHAR(20) NOT NULL, fac32_choice VARCHAR(20) NOT NULL, fac32_time VARCHAR(20) NOT NULL, fac33_choice VARCHAR(20) NOT NULL, fac33_time VARCHAR(20) NOT NULL, fac34_choice VARCHAR(20) NOT NULL, fac34_time VARCHAR(20) NOT NULL, fac35_choice VARCHAR(20) NOT NULL, fac35_time VARCHAR(20) NOT NULL, fac36_choice VARCHAR(20) NOT NULL, fac36_time VARCHAR(20) NOT NULL, fac37_choice VARCHAR(20) NOT NULL, fac37_time VARCHAR(20) NOT NULL, fac38_choice VARCHAR(20) NOT NULL, fac38_time VARCHAR(20) NOT NULL, fac39_choice VARCHAR(20) NOT NULL, fac39_time VARCHAR(20) NOT NULL, fac40_choice VARCHAR(20) NOT NULL, fac40_time VARCHAR(20) NOT NULL, fac41_choice VARCHAR(20) NOT NULL, fac41_time VARCHAR(20) NOT NULL, fac42_choice VARCHAR(20) NOT NULL, fac42_time VARCHAR(20) NOT NULL, fac43_choice VARCHAR(20) NOT NULL, fac43_time VARCHAR(20) NOT NULL, fac44_choice VARCHAR(20) NOT NULL, fac44_time VARCHAR(20) NOT NULL, fac45_choice VARCHAR(20) NOT NULL, fac45_time VARCHAR(20) NOT NULL, fac46_choice VARCHAR(20) NOT NULL, fac46_time VARCHAR(20) NOT NULL, fac47_choice VARCHAR(20) NOT NULL, fac47_time VARCHAR(20) NOT NULL, fac48_choice VARCHAR(20) NOT NULL, fac48_time VARCHAR(20) NOT NULL, fac49_choice VARCHAR(20) NOT NULL, fac49_time VARCHAR(20) NOT NULL, fac50_choice VARCHAR(20) NOT NULL, fac50_time VARCHAR(20) NOT NULL, fac51_choice VARCHAR(20) NOT NULL, fac51_time VARCHAR(20) NOT NULL, fac52_choice VARCHAR(20) NOT NULL, fac52_time VARCHAR(20) NOT NULL, fac53_choice VARCHAR(20) NOT NULL, fac53_time VARCHAR(20) NOT NULL, fac54_choice VARCHAR(20) NOT NULL, fac54_time VARCHAR(20) NOT NULL, fac55_choice VARCHAR(20) NOT NULL, fac55_time VARCHAR(20) NOT NULL, PRIMARY KEY(unique_identifier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema): void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
    }
}
