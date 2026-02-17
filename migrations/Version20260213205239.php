<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260213205239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_progress (id INT AUTO_INCREMENT NOT NULL, dernier_numero_cours INT NOT NULL, test_niveau_complete TINYINT NOT NULL, date_derniere_activite DATETIME DEFAULT NULL, user_id INT NOT NULL, langue_id INT NOT NULL, niveau_actuel_id INT DEFAULT NULL, dernier_cours_complete_id INT DEFAULT NULL, INDEX IDX_C28C1646A76ED395 (user_id), INDEX IDX_C28C16462AADBACD (langue_id), INDEX IDX_C28C16465B4E0609 (niveau_actuel_id), INDEX IDX_C28C16467DA89377 (dernier_cours_complete_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C1646A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C16462AADBACD FOREIGN KEY (langue_id) REFERENCES langue (id)');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C16465B4E0609 FOREIGN KEY (niveau_actuel_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE user_progress ADD CONSTRAINT FK_C28C16467DA89377 FOREIGN KEY (dernier_cours_complete_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE cours CHANGE ressource ressource LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE session CHANGE lien_reunion lien_reunion VARCHAR(255) DEFAULT NULL, CHANGE id_group_id id_group_id INT DEFAULT NULL, CHANGE id_user_id id_user_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C1646A76ED395');
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C16462AADBACD');
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C16465B4E0609');
        $this->addSql('ALTER TABLE user_progress DROP FOREIGN KEY FK_C28C16467DA89377');
        $this->addSql('DROP TABLE user_progress');
        $this->addSql('ALTER TABLE cours CHANGE ressource ressource VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE session CHANGE lien_reunion lien_reunion VARCHAR(255) NOT NULL, CHANGE id_group_id id_group_id INT NOT NULL, CHANGE id_user_id id_user_id INT NOT NULL');
    }
}
