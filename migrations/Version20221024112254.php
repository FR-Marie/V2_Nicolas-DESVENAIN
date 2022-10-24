<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221024112254 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisations ADD epoque_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE realisations ADD CONSTRAINT FK_FC5C476D45E7D711 FOREIGN KEY (epoque_id) REFERENCES epoques (id)');
        $this->addSql('CREATE INDEX IDX_FC5C476D45E7D711 ON realisations (epoque_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisations DROP FOREIGN KEY FK_FC5C476D45E7D711');
        $this->addSql('DROP INDEX IDX_FC5C476D45E7D711 ON realisations');
        $this->addSql('ALTER TABLE realisations DROP epoque_id');
    }
}
