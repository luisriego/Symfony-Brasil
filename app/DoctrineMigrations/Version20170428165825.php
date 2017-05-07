<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170428165825 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contador');
        $this->addSql('ALTER TABLE contato ADD createdAt DATETIME NOT NULL, ADD menssagem LONGTEXT DEFAULT NULL, DROP mensagem, DROP created_at, CHANGE nome nome VARCHAR(100) DEFAULT NULL, CHANGE slug slug VARCHAR(100) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contador (id INT AUTO_INCREMENT NOT NULL, contador INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contato ADD mensagem LONGTEXT NOT NULL COLLATE utf8_unicode_ci, ADD created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, DROP createdAt, DROP menssagem, CHANGE nome nome VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE slug slug VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci');
    }
}
