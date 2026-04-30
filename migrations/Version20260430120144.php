<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260430120144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE groupe_membre');
        $this->addSql('DROP TABLE message_metadata');
        $this->addSql('DROP TABLE message_moderation');
        $this->addSql('DROP TABLE message_sentiment');
        $this->addSql('DROP TABLE user_session');
        $this->addSql('DROP TABLE user_stats_cache');
        $this->addSql('ALTER TABLE message CHANGE date_creation date_creation DATETIME NOT NULL, CHANGE date_modif date_modif DATETIME NOT NULL');
        $this->addSql('ALTER TABLE reservation DROP presence, DROP commentaire, DROP date_confirmation, CHANGE date_reservation date_reservation DATE DEFAULT NULL, CHANGE statut statut VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C4B56C08 FOREIGN KEY (id_session_id) REFERENCES session (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495579F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE session DROP duree, DROP prix, DROP description, DROP capacite_max, DROP nom, CHANGE statut statut VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE user DROP chosen_language, DROP avatar_svg');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_membre (id INT AUTO_INCREMENT NOT NULL, id_groupe_id INT NOT NULL, id_user_id INT NOT NULL, date_joined DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX idx_groupe_membre_groupe (id_groupe_id), INDEX idx_groupe_membre_user (id_user_id), UNIQUE INDEX uk_groupe_membre (id_groupe_id, id_user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message_metadata (id INT AUTO_INCREMENT NOT NULL, message_id INT NOT NULL, parent_message_id INT DEFAULT NULL, mentions VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX idx_message_metadata_parent (parent_message_id), UNIQUE INDEX uk_message_metadata_message (message_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message_moderation (id INT AUTO_INCREMENT NOT NULL, message_id INT NOT NULL, provider VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, is_flagged TINYINT DEFAULT 0 NOT NULL, top_category VARCHAR(120) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, top_score DOUBLE PRECISION DEFAULT NULL, api_available TINYINT DEFAULT 1 NOT NULL, error_message VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, raw_response LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, checked_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX idx_message_moderation_flagged (is_flagged), UNIQUE INDEX uk_message_moderation_message (message_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message_sentiment (id INT AUTO_INCREMENT NOT NULL, message_id INT NOT NULL, sentiment VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, checked_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, UNIQUE INDEX uk_message_sentiment_message (message_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_session (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, session_date DATE NOT NULL, login_time DATETIME NOT NULL, logout_time DATETIME DEFAULT NULL, duree_minutes INT DEFAULT 0, taches_completees INT DEFAULT 0, taches_commencees INT DEFAULT 0, objectifs_consultes INT DEFAULT 0, points_gagnes INT DEFAULT 0, INDEX idx_user_date (user_id, session_date), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_stats_cache (user_id INT NOT NULL, streak_actuel INT DEFAULT 0, streak_max INT DEFAULT 0, total_jours_actifs INT DEFAULT 0, total_sessions INT DEFAULT 0, total_points INT DEFAULT 0, niveau INT DEFAULT 1, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE message CHANGE date_creation date_creation DATE NOT NULL, CHANGE date_modif date_modif DATE NOT NULL');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C4B56C08');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495579F37AE5');
        $this->addSql('ALTER TABLE reservation ADD presence TINYINT DEFAULT NULL, ADD commentaire VARCHAR(255) DEFAULT NULL, ADD date_confirmation DATETIME DEFAULT NULL, CHANGE date_reservation date_reservation DATE NOT NULL, CHANGE statut statut VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE session ADD duree INT DEFAULT NULL, ADD prix NUMERIC(10, 2) DEFAULT NULL, ADD description VARCHAR(255) DEFAULT NULL, ADD capacite_max INT DEFAULT NULL, ADD nom VARCHAR(150) DEFAULT NULL, CHANGE statut statut VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE user ADD chosen_language VARCHAR(25) DEFAULT NULL, ADD avatar_svg MEDIUMTEXT DEFAULT NULL');
    }
}
