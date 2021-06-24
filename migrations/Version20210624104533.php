<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210624104533 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cible_mission (cible_id INT NOT NULL, mission_id INT NOT NULL, INDEX IDX_5D2C654FA96E5E09 (cible_id), INDEX IDX_5D2C654FBE6CAE90 (mission_id), PRIMARY KEY(cible_id, mission_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cible_mission ADD CONSTRAINT FK_5D2C654FA96E5E09 FOREIGN KEY (cible_id) REFERENCES cible (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cible_mission ADD CONSTRAINT FK_5D2C654FBE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cible DROP FOREIGN KEY FK_E15DEC3BBE6CAE90');
        $this->addSql('DROP INDEX IDX_E15DEC3BBE6CAE90 ON cible');
        $this->addSql('ALTER TABLE cible DROP mission_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE cible_mission');
        $this->addSql('ALTER TABLE cible ADD mission_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cible ADD CONSTRAINT FK_E15DEC3BBE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id)');
        $this->addSql('CREATE INDEX IDX_E15DEC3BBE6CAE90 ON cible (mission_id)');
    }
}
