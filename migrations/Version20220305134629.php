<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305134629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE legendary_hero (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, gallery LONGTEXT DEFAULT NULL, description LONGTEXT NOT NULL, attribut LONGTEXT NOT NULL, abilitie LONGTEXT NOT NULL, lords_effects LONGTEXT NOT NULL, items LONGTEXT NOT NULL, mounts LONGTEXT NOT NULL, particularity LONGTEXT DEFAULT NULL, strategy LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, gallery LONGTEXT DEFAULT NULL, description LONGTEXT NOT NULL, lore LONGTEXT NOT NULL, in_battle LONGTEXT NOT NULL, in_campaign LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE legendary_hero');
        $this->addSql('DROP TABLE race');
    }
}
