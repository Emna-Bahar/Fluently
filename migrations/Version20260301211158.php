<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260301211158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY `FK_93872075D6FD723`');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075D6FD723 FOREIGN KEY (id_objectif_id) REFERENCES objectif (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY `FK_F7645BAF1E5D0459`');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT FK_F7645BAF1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075D6FD723');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT `FK_93872075D6FD723` FOREIGN KEY (id_objectif_id) REFERENCES objectif (id)');
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY FK_F7645BAF1E5D0459');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT `FK_F7645BAF1E5D0459` FOREIGN KEY (test_id) REFERENCES test (id)');
    }
}
