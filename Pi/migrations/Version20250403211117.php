<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250403211117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(255) NOT NULL, hashed_token VARCHAR(255) NOT NULL, requested_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', expires_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz RENAME INDEX fk_d265574e6f358eb2 TO IDX_D265574E6F358EB2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense RENAME INDEX repense_id TO IDX_3ED7EBBE6B68E4CC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY score_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY score_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP score
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT FK_32993751D7EFA40C FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT FK_32993751FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score RENAME INDEX iduser TO IDX_32993751FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation DROP FOREIGN KEY reclamation_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense DROP FOREIGN KEY recompense_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense ADD CONSTRAINT FK_1E9BC0DEC13692A9 FOREIGN KEY (idProgramme) REFERENCES programmebienetre (idProgramme)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse DROP FOREIGN KEY reponse_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7E5546315 FOREIGN KEY (idQuestion) REFERENCES question (idQuestion)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources DROP FOREIGN KEY ressources_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources CHANGE noteAverage noteAverage DOUBLE PRECISION NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources ADD CONSTRAINT FK_6A2CD5C7BF396750 FOREIGN KEY (id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY tache_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY tache_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT FK_93872075FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT FK_9387207533043433 FOREIGN KEY (idProjet) REFERENCES projet (idProjet)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE cin cin INT DEFAULT NULL, CHANGE num_phone num_phone INT NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reset_password_request
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz RENAME INDEX idx_d265574e6f358eb2 TO FK_D265574E6F358EB2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense RENAME INDEX idx_3ed7ebbe6b68e4cc TO repense_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation ADD CONSTRAINT reclamation_ibfk_1 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense DROP FOREIGN KEY FK_1E9BC0DEC13692A9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense ADD CONSTRAINT recompense_ibfk_1 FOREIGN KEY (idProgramme) REFERENCES programmebienetre (idProgramme) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7E5546315
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD CONSTRAINT reponse_ibfk_1 FOREIGN KEY (idQuestion) REFERENCES question (idQuestion) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources DROP FOREIGN KEY FK_6A2CD5C7BF396750
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources CHANGE noteAverage noteAverage DOUBLE PRECISION DEFAULT '0' NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources ADD CONSTRAINT ressources_ibfk_1 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY FK_32993751D7EFA40C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY FK_32993751FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD score DOUBLE PRECISION DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT score_ibfk_1 FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT score_ibfk_2 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score RENAME INDEX idx_32993751fe6e88d7 TO idUser
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY FK_93872075FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY FK_9387207533043433
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT tache_ibfk_2 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT tache_ibfk_1 FOREIGN KEY (idProjet) REFERENCES projet (idProjet) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE cin cin VARCHAR(255) DEFAULT 'NULL', CHANGE num_phone num_phone VARCHAR(20) DEFAULT 'NULL'
        SQL);
    }
}
