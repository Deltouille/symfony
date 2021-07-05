<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210701120313 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nationnalite ADD pays_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE nationnalite ADD CONSTRAINT FK_201D06D5A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_201D06D5A6E44244 ON nationnalite (pays_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE nationnalite DROP FOREIGN KEY FK_201D06D5A6E44244');
        $this->addSql('DROP INDEX UNIQ_201D06D5A6E44244 ON nationnalite');
        $this->addSql('ALTER TABLE nationnalite DROP pays_id');
    }
}
