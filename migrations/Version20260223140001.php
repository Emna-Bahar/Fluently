<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260223140001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create message_log table for audit trail of message edits and deletions';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE message_log (
            id INT AUTO_INCREMENT NOT NULL,
            action VARCHAR(20) NOT NULL,
            message_id INT DEFAULT NULL,
            groupe_id INT NOT NULL,
            user_id INT DEFAULT NULL,
            user_name VARCHAR(255) NOT NULL,
            original_content LONGTEXT NOT NULL,
            new_content LONGTEXT DEFAULT NULL,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE message_log');
    }
}
