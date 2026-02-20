<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260220194936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `fk_test_niveau`');
        $this->addSql('DROP INDEX fk_test_niveau ON test');
        $this->addSql('ALTER TABLE test DROP niveau_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test ADD niveau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT `fk_test_niveau` FOREIGN KEY (niveau_id) REFERENCES niveau (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX fk_test_niveau ON test (niveau_id)');
    }
}
