<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309102936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE magic_domain (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, gallery LONGTEXT DEFAULT NULL, strategy LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE spell ADD magic_domain_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE spell ADD CONSTRAINT FK_D03FCD8DC835E77F FOREIGN KEY (magic_domain_id) REFERENCES magic_domain (id)');
        $this->addSql('CREATE INDEX IDX_D03FCD8DC835E77F ON spell (magic_domain_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE spell DROP FOREIGN KEY FK_D03FCD8DC835E77F');
        $this->addSql('DROP TABLE magic_domain');
        $this->addSql('DROP INDEX IDX_D03FCD8DC835E77F ON spell');
        $this->addSql('ALTER TABLE spell DROP magic_domain_id');
    }
}
