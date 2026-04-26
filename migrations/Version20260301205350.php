<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260301205350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229537A1329 FOREIGN KEY (message_id) REFERENCES message (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_A60AE229537A1329 ON message_log (message_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229537A1329');
        $this->addSql('DROP INDEX IDX_A60AE229537A1329 ON message_log');
    }
}
