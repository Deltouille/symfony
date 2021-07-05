<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210701095518 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite_agent (specialite_id INT NOT NULL, agent_id INT NOT NULL, INDEX IDX_5451202C2195E0F0 (specialite_id), INDEX IDX_5451202C3414710B (agent_id), PRIMARY KEY(specialite_id, agent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE specialite_agent ADD CONSTRAINT FK_5451202C2195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specialite_agent ADD CONSTRAINT FK_5451202C3414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mission ADD specialite_id INT DEFAULT NULL, DROP specialite');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C2195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('CREATE INDEX IDX_9067F23C2195E0F0 ON mission (specialite_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C2195E0F0');
        $this->addSql('ALTER TABLE specialite_agent DROP FOREIGN KEY FK_5451202C2195E0F0');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE specialite_agent');
        $this->addSql('DROP INDEX IDX_9067F23C2195E0F0 ON mission');
        $this->addSql('ALTER TABLE mission ADD specialite VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP specialite_id');
    }
}
