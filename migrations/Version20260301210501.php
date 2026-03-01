<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260301210501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message_log ADD updated_at DATETIME DEFAULT NULL, ADD created_by_id INT DEFAULT NULL, ADD updated_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229896DBBDE FOREIGN KEY (updated_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_A60AE229B03A8386 ON message_log (created_by_id)');
        $this->addSql('CREATE INDEX IDX_A60AE229896DBBDE ON message_log (updated_by_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229B03A8386');
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229896DBBDE');
        $this->addSql('DROP INDEX IDX_A60AE229B03A8386 ON message_log');
        $this->addSql('DROP INDEX IDX_A60AE229896DBBDE ON message_log');
        $this->addSql('ALTER TABLE message_log DROP updated_at, DROP created_by_id, DROP updated_by_id');
    }
}
