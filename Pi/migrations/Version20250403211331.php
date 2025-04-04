<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250403211331 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, idProgramme INT DEFAULT NULL, idUser INT DEFAULT NULL, rating INT DEFAULT NULL, commentaire TEXT DEFAULT NULL, INDEX idProgramme (idProgramme), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE code (idCode INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) DEFAULT 'NULL', idUser INT DEFAULT NULL, INDEX idUser (idUser), UNIQUE INDEX code (code), PRIMARY KEY(idCode)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE commentaire (idCommentaire INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT 'NULL', Description VARCHAR(255) DEFAULT 'NULL', imagePath VARCHAR(255) NOT NULL, idPublication INT DEFAULT NULL, idUser INT DEFAULT NULL, INDEX idUser (idUser), INDEX idPublication (idPublication), PRIMARY KEY(idCommentaire)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE evaluation (idEvaluation INT AUTO_INCREMENT NOT NULL, id INT NOT NULL, idResource INT NOT NULL, note INT DEFAULT NULL, dateEvaluation DATETIME DEFAULT 'current_timestamp()' NOT NULL, INDEX idResource (idResource), UNIQUE INDEX id (id, idResource), PRIMARY KEY(idEvaluation)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE favoris (id INT DEFAULT NULL, idFavoris INT AUTO_INCREMENT NOT NULL, note VARCHAR(255) DEFAULT 'NULL', TitreRessource VARCHAR(255) DEFAULT 'NULL', idResource INT DEFAULT NULL, INDEX idResource (idResource), INDEX idUser (id), PRIMARY KEY(idFavoris)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE moduledeformation (idModule INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT 'NULL', sujet VARCHAR(255) DEFAULT 'NULL', PRIMARY KEY(idModule)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE moduledeformation_quiz (idQuiz INT NOT NULL, idUser INT DEFAULT NULL, idModule INT NOT NULL, INDEX idQuiz (idQuiz), INDEX idUser (idUser), INDEX IDX_D265574E6F358EB2 (idModule), PRIMARY KEY(idQuiz, idModule)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE programmebienetre (idProgramme INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT 'NULL', type VARCHAR(255) DEFAULT 'NULL', description VARCHAR(255) DEFAULT 'NULL', idUser INT DEFAULT NULL, INDEX idUser (idUser), PRIMARY KEY(idProgramme)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE projet (idProjet INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT 'NULL', Description VARCHAR(255) DEFAULT 'NULL', idUser INT DEFAULT NULL, INDEX idUser (idUser), PRIMARY KEY(idProjet)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE publication (idPublication INT AUTO_INCREMENT NOT NULL, contenu VARCHAR(255) DEFAULT 'NULL', date DATETIME DEFAULT 'current_timestamp()' NOT NULL, idUser INT DEFAULT NULL, INDEX idUser (idUser), PRIMARY KEY(idPublication)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE question (idQuestion INT AUTO_INCREMENT NOT NULL, Question VARCHAR(255) DEFAULT 'NULL', idQuiz INT DEFAULT NULL, INDEX idQuiz (idQuiz), PRIMARY KEY(idQuestion)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE question_repense (question_id INT NOT NULL, repense_id INT NOT NULL, INDEX IDX_3ED7EBBE1E27F6BF (question_id), INDEX IDX_3ED7EBBE6B68E4CC (repense_id), PRIMARY KEY(question_id, repense_id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE quiz (idQuiz INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT 'NULL', dateCreation DATE DEFAULT 'NULL', PRIMARY KEY(idQuiz)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE score (idQuiz INT NOT NULL, idUser INT NOT NULL, INDEX IDX_32993751D7EFA40C (idQuiz), INDEX IDX_32993751FE6E88D7 (idUser), PRIMARY KEY(idQuiz, idUser)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE reclamation (idReclamation INT AUTO_INCREMENT NOT NULL, Commentaire VARCHAR(255) DEFAULT 'NULL', date DATE DEFAULT 'NULL', etat VARCHAR(255) DEFAULT '''Pending''' NOT NULL, idUser INT DEFAULT NULL, INDEX idUser (idUser), PRIMARY KEY(idReclamation)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE recompense (idRecompense INT AUTO_INCREMENT NOT NULL, dateAttribution DATE DEFAULT 'NULL', type VARCHAR(255) DEFAULT 'NULL', statusRecompence VARCHAR(255) DEFAULT 'NULL', idProgramme INT DEFAULT NULL, INDEX idProgramme (idProgramme), PRIMARY KEY(idRecompense)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE reponse (idReponse INT AUTO_INCREMENT NOT NULL, Response VARCHAR(255) DEFAULT 'NULL', status VARCHAR(255) DEFAULT 'NULL', idQuestion INT DEFAULT NULL, INDEX idQuestion (idQuestion), PRIMARY KEY(idReponse)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(255) NOT NULL, hashed_token VARCHAR(255) NOT NULL, requested_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', expires_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE ressources (id INT DEFAULT NULL, idResource INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT 'NULL', description VARCHAR(255) DEFAULT 'NULL', titre VARCHAR(255) DEFAULT 'NULL', lien VARCHAR(255) DEFAULT 'NULL', noteAverage DOUBLE PRECISION NOT NULL, INDEX idUser (id), PRIMARY KEY(idResource)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE tache (idTache INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT 'NULL', Description VARCHAR(255) DEFAULT 'NULL', date INT DEFAULT NULL, status VARCHAR(50) DEFAULT '''on progress''', idUser INT DEFAULT NULL, idProjet INT DEFAULT NULL, INDEX idUser (idUser), INDEX idProjet (idProjet), PRIMARY KEY(idTache)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT 'NULL', prenom VARCHAR(255) DEFAULT 'NULL', email VARCHAR(255) DEFAULT 'NULL', password VARCHAR(255) DEFAULT 'NULL', cin INT DEFAULT NULL, dateNaissance DATE DEFAULT 'NULL', role VARCHAR(255) DEFAULT 'NULL', image_url VARCHAR(255) DEFAULT 'NULL', num_phone INT NOT NULL, status VARCHAR(20) DEFAULT '''ACTIVE''', UNIQUE INDEX email (email), UNIQUE INDEX cin (cin), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE code ADD CONSTRAINT FK_77153098FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCEF619801 FOREIGN KEY (idPublication) REFERENCES publication (idPublication)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCFE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris ADD CONSTRAINT FK_8933C432EF32DE4D FOREIGN KEY (idResource) REFERENCES ressources (idResource)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris ADD CONSTRAINT FK_8933C432BF396750 FOREIGN KEY (id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz ADD CONSTRAINT FK_D265574ED7EFA40C FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz ADD CONSTRAINT FK_D265574EFE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz ADD CONSTRAINT FK_D265574E6F358EB2 FOREIGN KEY (idModule) REFERENCES moduledeformation (idModule)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE programmebienetre ADD CONSTRAINT FK_47C3C3B4FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE projet ADD CONSTRAINT FK_50159CA9FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD CONSTRAINT FK_B6F7494ED7EFA40C FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense ADD CONSTRAINT FK_3ED7EBBE1E27F6BF FOREIGN KEY (question_id) REFERENCES question (idQuestion)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense ADD CONSTRAINT FK_3ED7EBBE6B68E4CC FOREIGN KEY (repense_id) REFERENCES reponse (idReponse)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT FK_32993751D7EFA40C FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT FK_32993751FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense ADD CONSTRAINT FK_1E9BC0DEC13692A9 FOREIGN KEY (idProgramme) REFERENCES programmebienetre (idProgramme)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7E5546315 FOREIGN KEY (idQuestion) REFERENCES question (idQuestion)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources ADD CONSTRAINT FK_6A2CD5C7BF396750 FOREIGN KEY (id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT FK_93872075FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT FK_9387207533043433 FOREIGN KEY (idProjet) REFERENCES projet (idProjet)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE code DROP FOREIGN KEY FK_77153098FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCEF619801
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCFE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris DROP FOREIGN KEY FK_8933C432EF32DE4D
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris DROP FOREIGN KEY FK_8933C432BF396750
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz DROP FOREIGN KEY FK_D265574ED7EFA40C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz DROP FOREIGN KEY FK_D265574EFE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz DROP FOREIGN KEY FK_D265574E6F358EB2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE programmebienetre DROP FOREIGN KEY FK_47C3C3B4FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE projet DROP FOREIGN KEY FK_50159CA9FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question DROP FOREIGN KEY FK_B6F7494ED7EFA40C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense DROP FOREIGN KEY FK_3ED7EBBE1E27F6BF
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense DROP FOREIGN KEY FK_3ED7EBBE6B68E4CC
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY FK_32993751D7EFA40C
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY FK_32993751FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense DROP FOREIGN KEY FK_1E9BC0DEC13692A9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7E5546315
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources DROP FOREIGN KEY FK_6A2CD5C7BF396750
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY FK_93872075FE6E88D7
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY FK_9387207533043433
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE avis
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE code
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE commentaire
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE evaluation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE favoris
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE moduledeformation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE moduledeformation_quiz
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE programmebienetre
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE projet
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE publication
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE question
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE question_repense
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE quiz
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE score
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reclamation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE recompense
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reponse
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reset_password_request
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE ressources
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tache
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
