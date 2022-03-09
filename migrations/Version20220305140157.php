<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305140157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hero (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, gallery LONGTEXT NOT NULL, description LONGTEXT NOT NULL, attributs LONGTEXT NOT NULL, abilities LONGTEXT NOT NULL, mounts LONGTEXT DEFAULT NULL, strategy LONGTEXT NOT NULL, health VARCHAR(255) NOT NULL, leadership VARCHAR(255) NOT NULL, melee_attack VARCHAR(255) NOT NULL, melee_defence VARCHAR(255) NOT NULL, charge_bonus VARCHAR(255) NOT NULL, missile_resistance VARCHAR(255) NOT NULL, weapon_damage VARCHAR(255) NOT NULL, armour_piercing_damage VARCHAR(255) NOT NULL, bonus_vs_large VARCHAR(255) NOT NULL, missile_damage VARCHAR(255) DEFAULT NULL, armour_piercing_missile_damage VARCHAR(255) DEFAULT NULL, explosive_damage VARCHAR(255) DEFAULT NULL, explosive_armour_piercing_damage VARCHAR(255) DEFAULT NULL, reload_time VARCHAR(255) DEFAULT NULL, ammunition VARCHAR(255) DEFAULT NULL, range_shot VARCHAR(255) DEFAULT NULL, magical_attacks VARCHAR(255) DEFAULT NULL, flaming_attacks VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE hero');
    }
}
