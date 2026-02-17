<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260215120914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY `FK_F7645BAF1E5D0459`');
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY `FK_F7645BAFA76ED395`');
        $this->addSql('DROP TABLE test_passage');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C21AA9806EA FOREIGN KEY (id_langue_id) REFERENCES langue (id)');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C218B0B20A6 FOREIGN KEY (id_niveau_id) REFERENCES niveau (id)');
        $this->addSql('CREATE INDEX IDX_4B98C21AA9806EA ON groupe (id_langue_id)');
        $this->addSql('CREATE INDEX IDX_4B98C218B0B20A6 ON groupe (id_niveau_id)');
        $this->addSql('ALTER TABLE groupe_user DROP FOREIGN KEY `FK_GROUPE_USER_USER`');
        $this->addSql('DROP INDEX fk_groupe_user_user ON groupe_user');
        $this->addSql('CREATE INDEX IDX_257BA9FEA76ED395 ON groupe_user (user_id)');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT `FK_GROUPE_USER_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C84955C4B56C08`');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C4B56C08 FOREIGN KEY (id_session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE session CHANGE lien_reunion lien_reunion VARCHAR(255) DEFAULT NULL, CHANGE rating rating INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test_passage (id INT AUTO_INCREMENT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME DEFAULT NULL, resultat DOUBLE PRECISION DEFAULT NULL, score INT DEFAULT NULL, score_max INT NOT NULL, statut VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, temps_passe INT DEFAULT NULL, test_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_F7645BAFA76ED395 (user_id), INDEX IDX_F7645BAF1E5D0459 (test_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT `FK_F7645BAF1E5D0459` FOREIGN KEY (test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT `FK_F7645BAFA76ED395` FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C21AA9806EA');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C218B0B20A6');
        $this->addSql('DROP INDEX IDX_4B98C21AA9806EA ON groupe');
        $this->addSql('DROP INDEX IDX_4B98C218B0B20A6 ON groupe');
        $this->addSql('ALTER TABLE groupe_user DROP FOREIGN KEY FK_257BA9FEA76ED395');
        $this->addSql('DROP INDEX idx_257ba9fea76ed395 ON groupe_user');
        $this->addSql('CREATE INDEX FK_GROUPE_USER_USER ON groupe_user (user_id)');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT FK_257BA9FEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C4B56C08');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT `FK_42C84955C4B56C08` FOREIGN KEY (id_session_id) REFERENCES session (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE session CHANGE lien_reunion lien_reunion VARCHAR(255) NOT NULL, CHANGE rating rating DOUBLE PRECISION DEFAULT NULL');
    }
}
