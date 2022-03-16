<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220316081944 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE race ADD legendary_hero_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE race ADD CONSTRAINT FK_DA6FBBAF48DDE85D FOREIGN KEY (legendary_hero_id) REFERENCES legendary_hero (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_DA6FBBAF48DDE85D ON race (legendary_hero_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE race DROP FOREIGN KEY FK_DA6FBBAF48DDE85D');
        $this->addSql('DROP INDEX UNIQ_DA6FBBAF48DDE85D ON race');
        $this->addSql('ALTER TABLE race DROP legendary_hero_id');
    }
}
