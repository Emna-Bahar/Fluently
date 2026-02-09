<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260209003119 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test_passage (id INT AUTO_INCREMENT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME DEFAULT NULL, resultat DOUBLE PRECISION DEFAULT NULL, score INT DEFAULT NULL, score_max INT NOT NULL, statut VARCHAR(20) NOT NULL, temps_passe INT DEFAULT NULL, test_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_F7645BAF1E5D0459 (test_id), INDEX IDX_F7645BAFA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT FK_F7645BAF1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE test_passage ADD CONSTRAINT FK_F7645BAFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE langue CHANGE popularite popularite VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `FK_D87F7E0C79F37AE5`');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `FK_D87F7E0CAA9806EA`');
        $this->addSql('DROP INDEX IDX_D87F7E0CAA9806EA ON test');
        $this->addSql('DROP INDEX IDX_D87F7E0C79F37AE5 ON test');
        $this->addSql('ALTER TABLE test ADD titre VARCHAR(255) NOT NULL, ADD duree_estimee INT DEFAULT NULL, ADD langue_id INT NOT NULL, DROP date_passage, DROP resultat, DROP duree, DROP id_langue_id, DROP id_user_id');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C2AADBACD FOREIGN KEY (langue_id) REFERENCES langue (id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C2AADBACD ON test (langue_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY FK_F7645BAF1E5D0459');
        $this->addSql('ALTER TABLE test_passage DROP FOREIGN KEY FK_F7645BAFA76ED395');
        $this->addSql('DROP TABLE test_passage');
        $this->addSql('ALTER TABLE langue CHANGE popularite popularite VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C2AADBACD');
        $this->addSql('DROP INDEX IDX_D87F7E0C2AADBACD ON test');
        $this->addSql('ALTER TABLE test ADD date_passage DATE NOT NULL, ADD resultat DOUBLE PRECISION DEFAULT NULL, ADD duree TIME NOT NULL, ADD id_user_id INT NOT NULL, DROP titre, DROP duree_estimee, CHANGE langue_id id_langue_id INT NOT NULL');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT `FK_D87F7E0C79F37AE5` FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT `FK_D87F7E0CAA9806EA` FOREIGN KEY (id_langue_id) REFERENCES langue (id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0CAA9806EA ON test (id_langue_id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C79F37AE5 ON test (id_user_id)');
    }
}
