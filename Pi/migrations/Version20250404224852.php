<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250404224852 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE code DROP FOREIGN KEY code_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire DROP FOREIGN KEY commentaire_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire DROP FOREIGN KEY commentaire_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris DROP FOREIGN KEY favoris_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris DROP FOREIGN KEY favoris_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz DROP FOREIGN KEY moduledeformation_quiz_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz DROP FOREIGN KEY moduledeformation_quiz_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz DROP FOREIGN KEY moduledeformation_quiz_ibfk_3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE programmebienetre DROP FOREIGN KEY programmebienetre_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE projet DROP FOREIGN KEY projet_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE publication DROP FOREIGN KEY publication_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense DROP FOREIGN KEY question_repense_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense DROP FOREIGN KEY question_repense_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation DROP FOREIGN KEY reclamation_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense DROP FOREIGN KEY recompense_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources DROP FOREIGN KEY ressources_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY score_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score DROP FOREIGN KEY score_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY tache_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache DROP FOREIGN KEY tache_ibfk_2
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
            DROP TABLE question_repense
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reclamation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE recompense
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE ressources
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE score
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tache
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question MODIFY idQuestion INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question DROP FOREIGN KEY question_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idQuiz ON question
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `primary` ON question
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD quiz_id INT NOT NULL, DROP idQuiz, CHANGE Question question VARCHAR(255) NOT NULL, CHANGE idQuestion id INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD CONSTRAINT FK_B6F7494E853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B6F7494E853CD175 ON question (quiz_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD PRIMARY KEY (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE dateCreation dateCreation DATETIME NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz_user ADD CONSTRAINT FK_47622A12853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (idQuiz)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz_user ADD CONSTRAINT FK_47622A12A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse MODIFY idReponse INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse DROP FOREIGN KEY reponse_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idQuestion ON reponse
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `primary` ON reponse
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD question_id INT NOT NULL, DROP idQuestion, CHANGE Response response VARCHAR(255) DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE idReponse id INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC71E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5FB6DEC71E27F6BF ON reponse (question_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD PRIMARY KEY (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user ADD num_phone INT NOT NULL, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE cin cin INT DEFAULT NULL, CHANGE dateNaissance dateNaissance DATE DEFAULT NULL, CHANGE role role VARCHAR(255) DEFAULT 'USER', CHANGE image_url image_url VARCHAR(255) DEFAULT NULL, CHANGE status status VARCHAR(20) DEFAULT 'ACTIVE'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, idProgramme INT DEFAULT NULL, idUser INT DEFAULT NULL, rating INT DEFAULT NULL, commentaire TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, INDEX idProgramme (idProgramme), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE code (idCode INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idUser INT DEFAULT NULL, UNIQUE INDEX code (code), INDEX idUser (idUser), PRIMARY KEY(idCode)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE commentaire (idCommentaire INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, Description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idPublication INT DEFAULT NULL, idUser INT DEFAULT NULL, imagePath VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX idPublication (idPublication), INDEX idUser (idUser), PRIMARY KEY(idCommentaire)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE evaluation (idEvaluation INT AUTO_INCREMENT NOT NULL, id INT NOT NULL, idResource INT NOT NULL, note INT DEFAULT NULL, dateEvaluation DATETIME DEFAULT 'current_timestamp()' NOT NULL, UNIQUE INDEX id (id, idResource), INDEX idResource (idResource), PRIMARY KEY(idEvaluation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE favoris (id INT DEFAULT NULL, idFavoris INT AUTO_INCREMENT NOT NULL, note VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, TitreRessource VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idResource INT DEFAULT NULL, INDEX idResource (idResource), INDEX idUser (id), PRIMARY KEY(idFavoris)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE moduledeformation (idModule INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, sujet VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, PRIMARY KEY(idModule)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE moduledeformation_quiz (idModule INT NOT NULL, idQuiz INT NOT NULL, idUser INT DEFAULT NULL, INDEX idQuiz (idQuiz), INDEX idUser (idUser), INDEX IDX_D265574E6F358EB2 (idModule), PRIMARY KEY(idModule, idQuiz)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE programmebienetre (idProgramme INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, type VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idUser INT DEFAULT NULL, INDEX idUser (idUser), PRIMARY KEY(idProgramme)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE projet (idProjet INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, Description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idUser INT DEFAULT NULL, INDEX idUser (idUser), PRIMARY KEY(idProjet)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE publication (idPublication INT AUTO_INCREMENT NOT NULL, contenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idUser INT DEFAULT NULL, date DATETIME DEFAULT 'current_timestamp()' NOT NULL, INDEX idUser (idUser), PRIMARY KEY(idPublication)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE question_repense (question_id INT NOT NULL, repense_id INT NOT NULL, INDEX repense_id (repense_id), INDEX IDX_3ED7EBBE1E27F6BF (question_id), PRIMARY KEY(question_id, repense_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE reclamation (idReclamation INT AUTO_INCREMENT NOT NULL, Commentaire VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, date DATE DEFAULT 'NULL', idUser INT DEFAULT NULL, etat VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT '''Pending''' NOT NULL COLLATE `utf8mb4_general_ci`, INDEX idUser (idUser), PRIMARY KEY(idReclamation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE recompense (idRecompense INT AUTO_INCREMENT NOT NULL, dateAttribution DATE DEFAULT 'NULL', type VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, statusRecompence VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idProgramme INT DEFAULT NULL, INDEX idProgramme (idProgramme), PRIMARY KEY(idRecompense)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE ressources (id INT DEFAULT NULL, idResource INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, lien VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, noteAverage DOUBLE PRECISION DEFAULT '0' NOT NULL, INDEX idUser (id), PRIMARY KEY(idResource)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE score (idQuiz INT NOT NULL, idUser INT NOT NULL, score DOUBLE PRECISION DEFAULT 'NULL', INDEX idUser (idUser), INDEX IDX_32993751D7EFA40C (idQuiz), PRIMARY KEY(idQuiz, idUser)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE tache (idTache INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, Description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT 'NULL' COLLATE `utf8mb4_general_ci`, idProjet INT DEFAULT NULL, idUser INT DEFAULT NULL, date INT DEFAULT NULL, status VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT '''on progress''' COLLATE `utf8mb4_general_ci`, INDEX idUser (idUser), INDEX idProjet (idProjet), PRIMARY KEY(idTache)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE code ADD CONSTRAINT code_ibfk_1 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire ADD CONSTRAINT commentaire_ibfk_2 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE commentaire ADD CONSTRAINT commentaire_ibfk_1 FOREIGN KEY (idPublication) REFERENCES publication (idPublication) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris ADD CONSTRAINT favoris_ibfk_1 FOREIGN KEY (idResource) REFERENCES ressources (idResource) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE favoris ADD CONSTRAINT favoris_ibfk_2 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz ADD CONSTRAINT moduledeformation_quiz_ibfk_1 FOREIGN KEY (idModule) REFERENCES moduledeformation (idModule) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz ADD CONSTRAINT moduledeformation_quiz_ibfk_2 FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE moduledeformation_quiz ADD CONSTRAINT moduledeformation_quiz_ibfk_3 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE programmebienetre ADD CONSTRAINT programmebienetre_ibfk_1 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE projet ADD CONSTRAINT projet_ibfk_1 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE publication ADD CONSTRAINT publication_ibfk_1 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense ADD CONSTRAINT question_repense_ibfk_1 FOREIGN KEY (question_id) REFERENCES question (idQuestion) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question_repense ADD CONSTRAINT question_repense_ibfk_2 FOREIGN KEY (repense_id) REFERENCES reponse (idReponse) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation ADD CONSTRAINT reclamation_ibfk_1 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE recompense ADD CONSTRAINT recompense_ibfk_1 FOREIGN KEY (idProgramme) REFERENCES programmebienetre (idProgramme) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE ressources ADD CONSTRAINT ressources_ibfk_1 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT score_ibfk_2 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE score ADD CONSTRAINT score_ibfk_1 FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT tache_ibfk_1 FOREIGN KEY (idProjet) REFERENCES projet (idProjet) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tache ADD CONSTRAINT tache_ibfk_2 FOREIGN KEY (idUser) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT 'NULL' COMMENT '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question MODIFY id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E853CD175
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_B6F7494E853CD175 ON question
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON question
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD idQuiz INT DEFAULT NULL, DROP quiz_id, CHANGE question Question VARCHAR(255) DEFAULT 'NULL', CHANGE id idQuestion INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD CONSTRAINT question_ibfk_1 FOREIGN KEY (idQuiz) REFERENCES quiz (idQuiz) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idQuiz ON question (idQuiz)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE question ADD PRIMARY KEY (idQuestion)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz CHANGE nom nom VARCHAR(255) DEFAULT 'NULL', CHANGE dateCreation dateCreation DATE DEFAULT 'NULL'
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz_user DROP FOREIGN KEY FK_47622A12853CD175
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz_user DROP FOREIGN KEY FK_47622A12A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse MODIFY id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC71E27F6BF
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_5FB6DEC71E27F6BF ON reponse
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX `PRIMARY` ON reponse
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD idQuestion INT DEFAULT NULL, DROP question_id, CHANGE response Response VARCHAR(255) DEFAULT 'NULL', CHANGE status status VARCHAR(255) DEFAULT 'NULL', CHANGE id idReponse INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD CONSTRAINT reponse_ibfk_1 FOREIGN KEY (idQuestion) REFERENCES question (idQuestion) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX idQuestion ON reponse (idQuestion)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD PRIMARY KEY (idReponse)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user DROP num_phone, CHANGE nom nom VARCHAR(255) DEFAULT 'NULL', CHANGE prenom prenom VARCHAR(255) DEFAULT 'NULL', CHANGE email email VARCHAR(255) DEFAULT 'NULL', CHANGE password password VARCHAR(255) DEFAULT 'NULL', CHANGE cin cin VARCHAR(255) DEFAULT 'NULL', CHANGE dateNaissance dateNaissance DATE DEFAULT 'NULL', CHANGE role role VARCHAR(255) DEFAULT 'NULL', CHANGE image_url image_url VARCHAR(255) DEFAULT 'NULL', CHANGE status status VARCHAR(20) DEFAULT '''ACTIVE'''
        SQL);
    }
}
