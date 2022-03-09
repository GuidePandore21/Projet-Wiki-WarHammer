<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305135330 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE legendary_hero ADD health VARCHAR(255) NOT NULL, ADD leadership VARCHAR(255) NOT NULL, ADD melee_attack VARCHAR(255) NOT NULL, ADD melee_defence VARCHAR(255) NOT NULL, ADD charge_bonus VARCHAR(255) NOT NULL, ADD missile_resistance VARCHAR(255) NOT NULL, ADD weapon_damage VARCHAR(255) NOT NULL, ADD armour_piercing_damage VARCHAR(255) NOT NULL, ADD missile_damage VARCHAR(255) DEFAULT NULL, ADD armour_piercing_missile_damage VARCHAR(255) DEFAULT NULL, ADD explosive_damage VARCHAR(255) DEFAULT NULL, ADD explosive_armour_piercing_damage VARCHAR(255) DEFAULT NULL, ADD reload_time VARCHAR(255) DEFAULT NULL, ADD ammunition VARCHAR(255) DEFAULT NULL, ADD range_shot VARCHAR(255) DEFAULT NULL, ADD magical_attacks VARCHAR(255) NOT NULL, ADD flaming_attacks VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE legendary_hero DROP health, DROP leadership, DROP melee_attack, DROP melee_defence, DROP charge_bonus, DROP missile_resistance, DROP weapon_damage, DROP armour_piercing_damage, DROP missile_damage, DROP armour_piercing_missile_damage, DROP explosive_damage, DROP explosive_armour_piercing_damage, DROP reload_time, DROP ammunition, DROP range_shot, DROP magical_attacks, DROP flaming_attacks');
    }
}
