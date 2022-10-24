<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221024112027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisations ADD instrument_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE realisations ADD CONSTRAINT FK_FC5C476DCF11D9C FOREIGN KEY (instrument_id) REFERENCES instruments (id)');
        $this->addSql('CREATE INDEX IDX_FC5C476DCF11D9C ON realisations (instrument_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE realisations DROP FOREIGN KEY FK_FC5C476DCF11D9C');
        $this->addSql('DROP INDEX IDX_FC5C476DCF11D9C ON realisations');
        $this->addSql('ALTER TABLE realisations DROP instrument_id');
    }
}
