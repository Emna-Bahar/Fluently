<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260301003435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE message_log (id INT AUTO_INCREMENT NOT NULL, action VARCHAR(20) NOT NULL, message_id INT DEFAULT NULL, groupe_id INT NOT NULL, user_id INT DEFAULT NULL, user_name VARCHAR(255) NOT NULL, original_content LONGTEXT NOT NULL, new_content LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE password_reset_codes (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(6) NOT NULL, expires_at DATETIME NOT NULL, user_id INT NOT NULL, INDEX IDX_D1E1C4C0A76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE user_progress (id INT AUTO_INCREMENT NOT NULL, dernier_numero_cours INT NOT NULL, test_niveau_complete TINYINT NOT NULL, date_derniere_activite DATETIME DEFAULT NULL, user_id INT NOT NULL, langue_id INT NOT NULL, niveau_actuel_id INT DEFAULT NULL, dernier_cours_complete_id INT DEFAULT NULL, INDEX IDX_C28C1646A76ED395 (user_id), INDEX IDX_C28C16462AADBACD (langue_id), INDEX IDX_C28C16465B4E0609 (niveau_actuel_id), INDEX IDX_C28C16467DA89377 (dernier_cours_complete_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE password_reset_codes ADD CONSTRAINT FK_D1E1C4C0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C1646A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C16462AADBACD FOREIGN KEY (langue_id) REFERENCES langue (id)');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C16465B4E0609 FOREIGN KEY (niveau_actuel_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C16467DA89377 FOREIGN KEY (dernier_cours_complete_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE cours CHANGE ressource ressource LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C21AA9806EA FOREIGN KEY (id_langue_id) REFERENCES langue (id)');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C218B0B20A6 FOREIGN KEY (id_niveau_id) REFERENCES niveau (id)');
        $this->addSql('CREATE INDEX IDX_4B98C21AA9806EA ON groupe (id_langue_id)');
        $this->addSql('CREATE INDEX IDX_4B98C218B0B20A6 ON groupe (id_niveau_id)');
        $this->addSql('ALTER TABLE groupe_user DROP FOREIGN KEY `FK_GROUPE_USER_USER`');
        $this->addSql('DROP INDEX fk_groupe_user_user ON groupe_user');
        $this->addSql('CREATE INDEX IDX_257BA9FEA76ED395 ON groupe_user (user_id)');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT `FK_GROUPE_USER_USER` FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE langue ADD updated_at DATETIME DEFAULT NULL, CHANGE popularite popularite VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY `FK_42C84955C4B56C08`');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C4B56C08 FOREIGN KEY (id_session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE session DROP rating, CHANGE lien_reunion lien_reunion VARCHAR(255) DEFAULT NULL, CHANGE id_group_id id_group_id INT DEFAULT NULL, CHANGE id_user_id id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `FK_D87F7E0C79F37AE5`');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY `FK_D87F7E0CAA9806EA`');
        $this->addSql('DROP INDEX IDX_D87F7E0CAA9806EA ON test');
        $this->addSql('DROP INDEX IDX_D87F7E0C79F37AE5 ON test');
        $this->addSql('ALTER TABLE test ADD titre VARCHAR(255) NOT NULL, ADD duree_estimee INT DEFAULT NULL, ADD langue_id INT NOT NULL, ADD niveau_id INT DEFAULT NULL, DROP date_passage, DROP resultat, DROP duree, DROP id_langue_id, DROP id_user_id');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C2AADBACD FOREIGN KEY (langue_id) REFERENCES langue (id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0CB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C2AADBACD ON test (langue_id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0CB3E9C81 ON test (niveau_id)');
        $this->addSql('ALTER TABLE test_passage CHANGE date_debut date_debut DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD face_descriptor LONGTEXT DEFAULT NULL, DROP role');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE password_reset_codes DROP FOREIGN KEY FK_D1E1C4C0A76ED395');
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C1646A76ED395');
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C16462AADBACD');
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C16465B4E0609');
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C16467DA89377');
        $this->addSql('DROP TABLE message_log');
        $this->addSql('DROP TABLE password_reset_codes');
        $this->addSql('DROP TABLE user_progress');
        $this->addSql('ALTER TABLE cours CHANGE ressource ressource VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C21AA9806EA');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C218B0B20A6');
        $this->addSql('DROP INDEX IDX_4B98C21AA9806EA ON groupe');
        $this->addSql('DROP INDEX IDX_4B98C218B0B20A6 ON groupe');
        $this->addSql('ALTER TABLE groupe_user DROP FOREIGN KEY FK_257BA9FEA76ED395');
        $this->addSql('DROP INDEX idx_257ba9fea76ed395 ON groupe_user');
        $this->addSql('CREATE INDEX FK_GROUPE_USER_USER ON groupe_user (user_id)');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT FK_257BA9FEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE langue DROP updated_at, CHANGE popularite popularite VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C4B56C08');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT `FK_42C84955C4B56C08` FOREIGN KEY (id_session_id) REFERENCES session (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE session ADD rating DOUBLE PRECISION DEFAULT NULL, CHANGE lien_reunion lien_reunion VARCHAR(255) NOT NULL, CHANGE id_group_id id_group_id INT NOT NULL, CHANGE id_user_id id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C2AADBACD');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0CB3E9C81');
        $this->addSql('DROP INDEX IDX_D87F7E0C2AADBACD ON test');
        $this->addSql('DROP INDEX IDX_D87F7E0CB3E9C81 ON test');
        $this->addSql('ALTER TABLE test ADD date_passage DATE NOT NULL, ADD resultat DOUBLE PRECISION NOT NULL, ADD duree TIME NOT NULL, ADD id_user_id INT NOT NULL, DROP titre, DROP duree_estimee, DROP niveau_id, CHANGE langue_id id_langue_id INT NOT NULL');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT `FK_D87F7E0C79F37AE5` FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT `FK_D87F7E0CAA9806EA` FOREIGN KEY (id_langue_id) REFERENCES langue (id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0CAA9806EA ON test (id_langue_id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C79F37AE5 ON test (id_user_id)');
        $this->addSql('ALTER TABLE test_passage CHANGE date_debut date_debut DATETIME NOT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD role VARCHAR(100) NOT NULL, DROP roles, DROP password, DROP face_descriptor');
    }
}
