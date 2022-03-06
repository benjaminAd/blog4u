<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306183906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reaction (id INT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO reaction (id,libelle) VALUES (1,\'REAC_AIME\')');
        $this->addSql('INSERT INTO reaction (id,libelle) VALUES (2,\'REAC_ADORE\')');
        $this->addSql('INSERT INTO reaction (id,libelle) VALUES (3,\'REAC_BRAVO\')');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE reaction');
    }
}
