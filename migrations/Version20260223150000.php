<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260223150000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add roles (JSON), password, face_descriptor columns to user table; rename role->roles';
    }

    public function up(Schema $schema): void
    {
        // Convert existing role values to valid JSON arrays before changing column type
        $this->addSql("UPDATE user SET role = CONCAT('[\"', role, '\"]') WHERE role NOT LIKE '[%'");

        // Rename the old `role` column to `roles` and change type to JSON
        $this->addSql("ALTER TABLE user CHANGE role roles JSON NOT NULL COMMENT '(DC2Type:json)'");

        // Add password column (required by PasswordAuthenticatedUserInterface)
        $this->addSql("ALTER TABLE user ADD password VARCHAR(255) NOT NULL DEFAULT ''");

        // Add face_descriptor column (nullable text)
        $this->addSql('ALTER TABLE user ADD face_descriptor LONGTEXT DEFAULT NULL');

        // Ensure email unique index exists (skip if already present)
        $indexes = $this->connection->fetchAllAssociative("SHOW INDEX FROM user WHERE Key_name = 'UNIQ_8D93D649E7927C74'");
        if (empty($indexes)) {
            $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        }
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user DROP face_descriptor, DROP password');
        $this->addSql("ALTER TABLE user CHANGE roles role VARCHAR(50) NOT NULL DEFAULT 'ROLE_USER'");
    }
}
