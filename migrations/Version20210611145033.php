<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210611145033 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, nationnalite_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, code_identification VARCHAR(255) NOT NULL, INDEX IDX_268B9C9DD85FF994 (nationnalite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cible (id INT AUTO_INCREMENT NOT NULL, nationnalite_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, nom_code VARCHAR(255) NOT NULL, INDEX IDX_E15DEC3BD85FF994 (nationnalite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nationnalite_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, nom_code VARCHAR(255) NOT NULL, INDEX IDX_4C62E638D85FF994 (nationnalite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, nom_code VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, specialite VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission_agent (mission_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_B61DC3A0BE6CAE90 (mission_id), INDEX IDX_B61DC3A03414710B (agent_id), PRIMARY KEY(mission_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission_contact (mission_id INT NOT NULL, contact_id INT NOT NULL, INDEX IDX_DD5E7275BE6CAE90 (mission_id), INDEX IDX_DD5E7275E7A1254A (contact_id), PRIMARY KEY(mission_id, contact_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission_planque (mission_id INT NOT NULL, planque_id INT NOT NULL, INDEX IDX_DA0690F7BE6CAE90 (mission_id), INDEX IDX_DA0690F7CE8A20B (planque_id), PRIMARY KEY(mission_id, planque_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nationnalite (id INT AUTO_INCREMENT NOT NULL, nom_natio VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planque (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9DD85FF994 FOREIGN KEY (nationnalite_id) REFERENCES nationnalite (id)');
        $this->addSql('ALTER TABLE cible ADD CONSTRAINT FK_E15DEC3BD85FF994 FOREIGN KEY (nationnalite_id) REFERENCES nationnalite (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638D85FF994 FOREIGN KEY (nationnalite_id) REFERENCES nationnalite (id)');
        $this->addSql('ALTER TABLE mission_agent ADD CONSTRAINT FK_B61DC3A0BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission_agent ADD CONSTRAINT FK_B61DC3A03414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission_contact ADD CONSTRAINT FK_DD5E7275BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission_contact ADD CONSTRAINT FK_DD5E7275E7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission_planque ADD CONSTRAINT FK_DA0690F7BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission_planque ADD CONSTRAINT FK_DA0690F7CE8A20B FOREIGN KEY (planque_id) REFERENCES planque (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mission_agent DROP FOREIGN KEY FK_B61DC3A03414710B');
        $this->addSql('ALTER TABLE mission_contact DROP FOREIGN KEY FK_DD5E7275E7A1254A');
        $this->addSql('ALTER TABLE mission_agent DROP FOREIGN KEY FK_B61DC3A0BE6CAE90');
        $this->addSql('ALTER TABLE mission_contact DROP FOREIGN KEY FK_DD5E7275BE6CAE90');
        $this->addSql('ALTER TABLE mission_planque DROP FOREIGN KEY FK_DA0690F7BE6CAE90');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9DD85FF994');
        $this->addSql('ALTER TABLE cible DROP FOREIGN KEY FK_E15DEC3BD85FF994');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638D85FF994');
        $this->addSql('ALTER TABLE mission_planque DROP FOREIGN KEY FK_DA0690F7CE8A20B');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE cible');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE mission_agent');
        $this->addSql('DROP TABLE mission_contact');
        $this->addSql('DROP TABLE mission_planque');
        $this->addSql('DROP TABLE nationnalite');
        $this->addSql('DROP TABLE planque');
    }
}
