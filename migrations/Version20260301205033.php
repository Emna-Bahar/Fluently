<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260301205033 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE2297A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A60AE2297A45358C ON message_log (groupe_id)');
        $this->addSql('CREATE INDEX IDX_A60AE229A76ED395 ON message_log (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE2297A45358C');
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229A76ED395');
        $this->addSql('DROP INDEX IDX_A60AE2297A45358C ON message_log');
        $this->addSql('DROP INDEX IDX_A60AE229A76ED395 ON message_log');
    }
}
