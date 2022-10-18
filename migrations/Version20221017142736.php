<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221017142736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE realisations (id INT AUTO_INCREMENT NOT NULL, titre_page VARCHAR(50) NOT NULL, titre_realisation VARCHAR(50) NOT NULL, image_realisation VARCHAR(255) NOT NULL, resume_realisation VARCHAR(255) NOT NULL, description_realisation1 LONGTEXT NOT NULL, description_realisation2 LONGTEXT NOT NULL, annexe_realisation1 VARCHAR(255) NOT NULL, annexe_realisation2 VARCHAR(255) NOT NULL, annexe_realisation3 VARCHAR(255) NOT NULL, annexe_realisation4 VARCHAR(255) NOT NULL, annexe_realisation5 VARCHAR(255) NOT NULL, video_realisation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE realisations');
    }
}
