<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180413060834 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE programs (id INTEGER NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE animal_programs (animal_id INTEGER NOT NULL, program_id INTEGER NOT NULL, PRIMARY KEY(animal_id, program_id))');
        $this->addSql('CREATE INDEX IDX_37CA63988E962C16 ON animal_programs (animal_id)');
        $this->addSql('CREATE INDEX IDX_37CA63983EB8070A ON animal_programs (program_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE programs');
        $this->addSql('DROP TABLE animal_programs');
    }
}
