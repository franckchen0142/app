<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220927071054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE driver ADD user_id INT NOT NULL, ADD phone VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD adress VARCHAR(255) DEFAULT NULL, ADD city VARCHAR(255) DEFAULT NULL, ADD cp VARCHAR(255) DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD photo LONGTEXT NOT NULL COMMENT \'(DC2Type:object)\', CHANGE age first_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE driver ADD CONSTRAINT FK_11667CD9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_11667CD9A76ED395 ON driver (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE driver DROP FOREIGN KEY FK_11667CD9A76ED395');
        $this->addSql('DROP INDEX IDX_11667CD9A76ED395 ON driver');
        $this->addSql('ALTER TABLE driver ADD age VARCHAR(255) NOT NULL, DROP user_id, DROP first_name, DROP phone, DROP email, DROP adress, DROP city, DROP cp, DROP created_at, DROP photo');
    }
}
