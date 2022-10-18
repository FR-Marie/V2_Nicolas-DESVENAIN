<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221018074005 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE videos (id INT AUTO_INCREMENT NOT NULL, video_1 VARCHAR(255) DEFAULT NULL, video_2 VARCHAR(255) DEFAULT NULL, video_3 VARCHAR(255) DEFAULT NULL, video_4 VARCHAR(255) DEFAULT NULL, video_5 VARCHAR(255) DEFAULT NULL, video_6 VARCHAR(255) DEFAULT NULL, video_7 VARCHAR(255) DEFAULT NULL, video_8 VARCHAR(255) DEFAULT NULL, video_9 VARCHAR(255) DEFAULT NULL, video_10 VARCHAR(255) DEFAULT NULL, video_11 VARCHAR(255) DEFAULT NULL, video_12 VARCHAR(255) DEFAULT NULL, video_13 VARCHAR(255) DEFAULT NULL, video_14 VARCHAR(255) DEFAULT NULL, video_15 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE videos');
    }
}
