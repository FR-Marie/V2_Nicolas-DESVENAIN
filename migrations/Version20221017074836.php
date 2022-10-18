<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221017074836 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lutherie (id INT AUTO_INCREMENT NOT NULL, titre_site VARCHAR(50) NOT NULL, titre_introduction VARCHAR(50) NOT NULL, introduction LONGTEXT NOT NULL, image_description VARCHAR(255) NOT NULL, image_galerie VARCHAR(255) NOT NULL, description1 LONGTEXT NOT NULL, description2 LONGTEXT NOT NULL, galerie1 VARCHAR(255) NOT NULL, galerie2 VARCHAR(255) NOT NULL, galerie3 VARCHAR(255) NOT NULL, galerie4 VARCHAR(255) NOT NULL, galerie5 VARCHAR(255) NOT NULL, galerie6 VARCHAR(255) NOT NULL, galerie7 VARCHAR(255) NOT NULL, galerie8 VARCHAR(255) NOT NULL, galerie9 VARCHAR(255) NOT NULL, galerie10 VARCHAR(255) NOT NULL, galerie11 VARCHAR(255) NOT NULL, galerie12 VARCHAR(255) NOT NULL, galerie13 VARCHAR(255) NOT NULL, galerie14 VARCHAR(255) NOT NULL, galerie15 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE lutherie');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
