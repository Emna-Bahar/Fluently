<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260223160000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Align test table with Test entity (add titre, duree_estimee, langue_id, niveau_id; drop old columns)';
    }

    public function up(Schema $schema): void
    {
        // Drop old FK constraints
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `FK_D87F7E0C79F37AE5`');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `FK_D87F7E0CAA9806EA`');

        // Drop old indexes
        $this->addSql('DROP INDEX IDX_D87F7E0C79F37AE5 ON test');
        $this->addSql('DROP INDEX IDX_D87F7E0CAA9806EA ON test');

        // Add new columns (nullable/default to avoid NOT NULL constraint failure on existing rows)
        $this->addSql("ALTER TABLE test ADD titre VARCHAR(255) NOT NULL DEFAULT ''");
        $this->addSql('ALTER TABLE test ADD duree_estimee INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test ADD langue_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test ADD niveau_id INT DEFAULT NULL');

        // Drop old columns
        $this->addSql('ALTER TABLE test DROP COLUMN date_passage');
        $this->addSql('ALTER TABLE test DROP COLUMN resultat');
        $this->addSql('ALTER TABLE test DROP COLUMN duree');
        $this->addSql('ALTER TABLE test DROP COLUMN id_langue_id');
        $this->addSql('ALTER TABLE test DROP COLUMN id_user_id');

        // Add FK constraints
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C2AADBACD FOREIGN KEY (langue_id) REFERENCES langue (id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0CB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');

        // Add indexes
        $this->addSql('CREATE INDEX IDX_D87F7E0C2AADBACD ON test (langue_id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0CB3E9C81 ON test (niveau_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C2AADBACD');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0CB3E9C81');
        $this->addSql('DROP INDEX IDX_D87F7E0C2AADBACD ON test');
        $this->addSql('DROP INDEX IDX_D87F7E0CB3E9C81 ON test');
        $this->addSql('ALTER TABLE test DROP COLUMN titre, DROP COLUMN duree_estimee, DROP COLUMN langue_id, DROP COLUMN niveau_id');
        $this->addSql('ALTER TABLE test ADD date_passage DATE NOT NULL, ADD resultat DOUBLE PRECISION NOT NULL, ADD duree TIME NOT NULL, ADD id_user_id INT NOT NULL, ADD id_langue_id INT NOT NULL');
    }
}
