<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260223200000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change message.date_creation and message.date_modif from DATE to DATETIME so time is stored';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE message CHANGE date_creation date_creation DATETIME NOT NULL, CHANGE date_modif date_modif DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE message CHANGE date_creation date_creation DATE NOT NULL, CHANGE date_modif date_modif DATE NOT NULL');
    }
}
