<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260301223136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe CHANGE capacite capacite INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message CHANGE date_creation date_creation DATE NOT NULL, CHANGE date_modif date_modif DATE NOT NULL');
        $this->addSql('ALTER TABLE message_log ADD updated_at DATETIME DEFAULT NULL, ADD created_by_id INT NOT NULL, ADD updated_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229537A1329 FOREIGN KEY (message_id) REFERENCES message (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE2297A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE message_log ADD CONSTRAINT FK_A60AE229896DBBDE FOREIGN KEY (updated_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_A60AE229537A1329 ON message_log (message_id)');
        $this->addSql('CREATE INDEX IDX_A60AE2297A45358C ON message_log (groupe_id)');
        $this->addSql('CREATE INDEX IDX_A60AE229A76ED395 ON message_log (user_id)');
        $this->addSql('CREATE INDEX IDX_A60AE229B03A8386 ON message_log (created_by_id)');
        $this->addSql('CREATE INDEX IDX_A60AE229896DBBDE ON message_log (updated_by_id)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C84955C4B56C08`');
        $this->addSql('ALTER TABLE reservation CHANGE date_reservation date_reservation DATE DEFAULT NULL, CHANGE statut statut VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C4B56C08 FOREIGN KEY (id_session_id) REFERENCES session (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE session ADD rating INT DEFAULT NULL, CHANGE date_heure date_heure DATETIME DEFAULT NULL, CHANGE statut statut VARCHAR(50) DEFAULT NULL, CHANGE id_group_id id_group_id INT NOT NULL, CHANGE id_user_id id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY `FK_93872075D6FD723`');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075D6FD723 FOREIGN KEY (id_objectif_id) REFERENCES objectif (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY `FK_F7645BAF1E5D0459`');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT FK_F7645BAF1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe CHANGE capacite capacite INT NOT NULL');
        $this->addSql('ALTER TABLE message CHANGE date_creation date_creation DATETIME NOT NULL, CHANGE date_modif date_modif DATETIME NOT NULL');
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229537A1329');
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE2297A45358C');
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229A76ED395');
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229B03A8386');
        $this->addSql('ALTER TABLE message_log DROP FOREIGN KEY FK_A60AE229896DBBDE');
        $this->addSql('DROP INDEX IDX_A60AE229537A1329 ON message_log');
        $this->addSql('DROP INDEX IDX_A60AE2297A45358C ON message_log');
        $this->addSql('DROP INDEX IDX_A60AE229A76ED395 ON message_log');
        $this->addSql('DROP INDEX IDX_A60AE229B03A8386 ON message_log');
        $this->addSql('DROP INDEX IDX_A60AE229896DBBDE ON message_log');
        $this->addSql('ALTER TABLE message_log DROP updated_at, DROP created_by_id, DROP updated_by_id');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C4B56C08');
        $this->addSql('ALTER TABLE reservation CHANGE date_reservation date_reservation DATE NOT NULL, CHANGE statut statut VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT `FK_42C84955C4B56C08` FOREIGN KEY (id_session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE session DROP rating, CHANGE date_heure date_heure DATETIME NOT NULL, CHANGE statut statut VARCHAR(50) NOT NULL, CHANGE id_group_id id_group_id INT DEFAULT NULL, CHANGE id_user_id id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075D6FD723');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT `FK_93872075D6FD723` FOREIGN KEY (id_objectif_id) REFERENCES objectif (id)');
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY FK_F7645BAF1E5D0459');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT `FK_F7645BAF1E5D0459` FOREIGN KEY (test_id) REFERENCES test (id)');
    }
}
