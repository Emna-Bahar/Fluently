<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260221101846 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `fk_test_niveau`');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `fk_test_niveau`');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0CB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('DROP INDEX fk_test_niveau ON test');
        $this->addSql('CREATE INDEX IDX_D87F7E0CB3E9C81 ON test (niveau_id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT `fk_test_niveau` FOREIGN KEY (niveau_id) REFERENCES niveau (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE test_passage CHANGE date_debut date_debut DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0CB3E9C81');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0CB3E9C81');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT `fk_test_niveau` FOREIGN KEY (niveau_id) REFERENCES niveau (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX idx_d87f7e0cb3e9c81 ON test');
        $this->addSql('CREATE INDEX fk_test_niveau ON test (niveau_id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0CB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE test_passage CHANGE date_debut date_debut DATETIME NOT NULL');
    }
}
