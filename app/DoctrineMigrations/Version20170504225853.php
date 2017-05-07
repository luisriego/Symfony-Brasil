<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170504225853 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE evento (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, created_at DATETIME DEFAULT NULL, nome VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, texto LONGTEXT DEFAULT NULL, cidade LONGTEXT DEFAULT NULL, estado LONGTEXT DEFAULT NULL, data_inicio DATETIME DEFAULT NULL, data_fim DATETIME DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, picto VARCHAR(255) DEFAULT NULL, imagem VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, destacado TINYINT(1) NOT NULL, no_brasil TINYINT(1) NOT NULL, publicar TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_47860B05989D9B62 (slug), INDEX IDX_47860B05F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evento ADD CONSTRAINT FK_47860B05F675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('ALTER TABLE fos_user ADD nome VARCHAR(50) NOT NULL, ADD sobrenome VARCHAR(100) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE evento');
        $this->addSql('ALTER TABLE fos_user DROP nome, DROP sobrenome');
    }
}
