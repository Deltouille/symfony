<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210629152101 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mission ADD pays_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CA6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_9067F23CA6E44244 ON mission (pays_id)');
        $this->addSql('ALTER TABLE planque ADD pays_id INT DEFAULT NULL, DROP pays');
        $this->addSql('ALTER TABLE planque ADD CONSTRAINT FK_4B3A04BAA6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_4B3A04BAA6E44244 ON planque (pays_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CA6E44244');
        $this->addSql('DROP INDEX IDX_9067F23CA6E44244 ON mission');
        $this->addSql('ALTER TABLE mission DROP pays_id');
        $this->addSql('ALTER TABLE planque DROP FOREIGN KEY FK_4B3A04BAA6E44244');
        $this->addSql('DROP INDEX IDX_4B3A04BAA6E44244 ON planque');
        $this->addSql('ALTER TABLE planque ADD pays VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP pays_id');
    }
}
