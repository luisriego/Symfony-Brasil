<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170504195945 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE evento ADD author_id INT NOT NULL, CHANGE destacado destacado TINYINT(1) NOT NULL, CHANGE publicar publicar TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE evento ADD CONSTRAINT FK_47860B05F675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('CREATE INDEX IDX_47860B05F675F31B ON evento (author_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE evento DROP FOREIGN KEY FK_47860B05F675F31B');
        $this->addSql('DROP INDEX IDX_47860B05F675F31B ON evento');
        $this->addSql('ALTER TABLE evento DROP author_id, CHANGE destacado destacado TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE publicar publicar TINYINT(1) DEFAULT \'0\' NOT NULL');
    }
}
