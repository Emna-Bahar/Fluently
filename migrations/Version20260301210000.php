<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration to add CASCADE constraints for proper ORM/DB alignment
 */
final class Version20260301210000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add CASCADE constraints to OneToMany relations';
    }

    public function up(Schema $schema): void
    {
        // Check if the constraint already exists before adding
        // For Test::passages - add ON DELETE CASCADE
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY IF EXISTS FK_BE4CA1E4E60AB5C4');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT FK_BE4CA1E4E60AB5C4 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');

        // For Objectif::taches - add ON DELETE CASCADE  
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY IF EXISTS FK_3CA18B4E0F08CD34');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_3CA18B4E0F08CD34 FOREIGN KEY (id_objectif_id) REFERENCES objectif (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // Revert to original constraints without CASCADE
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY FK_BE4CA1E4E60AB5C4');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT FK_BE4CA1E4E60AB5C4 FOREIGN KEY (test_id) REFERENCES test (id)');

        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_3CA18B4E0F08CD34');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_3CA18B4E0F08CD34 FOREIGN KEY (id_objectif_id) REFERENCES objectif (id)');
    }
}
