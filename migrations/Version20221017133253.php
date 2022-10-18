<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221017133253 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE luthier (id INT AUTO_INCREMENT NOT NULL, titre_page VARCHAR(50) NOT NULL, image_slide1 VARCHAR(255) NOT NULL, image_slide2 VARCHAR(255) NOT NULL, image_slide3 VARCHAR(255) NOT NULL, image_slide4 VARCHAR(255) NOT NULL, image_slide5 VARCHAR(255) NOT NULL, titre_introduction VARCHAR(50) NOT NULL, introduction LONGTEXT NOT NULL, titre_texte1 VARCHAR(50) NOT NULL, texte1 LONGTEXT NOT NULL, titre_texte2 VARCHAR(50) NOT NULL, texte2 LONGTEXT NOT NULL, titre_texte3 VARCHAR(50) NOT NULL, texte3 LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE luthier');
    }
}
