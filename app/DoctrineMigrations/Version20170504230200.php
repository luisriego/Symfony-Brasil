<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170504230200 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, created_at DATETIME DEFAULT NULL, title VARCHAR(150) NOT NULL, body LONGTEXT DEFAULT NULL, link VARCHAR(250) NOT NULL, type VARCHAR(50) NOT NULL, summary LONGTEXT DEFAULT NULL, INDEX IDX_5A8A6C8DF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fos_user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', nome VARCHAR(50) NOT NULL, sobrenome VARCHAR(100) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_957A647992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_957A6479A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_957A6479C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evento (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, created_at DATETIME DEFAULT NULL, nome VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, texto LONGTEXT DEFAULT NULL, cidade LONGTEXT DEFAULT NULL, estado LONGTEXT DEFAULT NULL, data_inicio DATETIME DEFAULT NULL, data_fim DATETIME DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, picto VARCHAR(255) DEFAULT NULL, imagem VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, destacado TINYINT(1) NOT NULL, no_brasil TINYINT(1) NOT NULL, publicar TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_47860B05989D9B62 (slug), INDEX IDX_47860B05F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contador (id INT AUTO_INCREMENT NOT NULL, ip VARCHAR(50) DEFAULT NULL, tipo VARCHAR(50) DEFAULT NULL, createdAt DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE treinamento (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, createdAt DATETIME NOT NULL, data DATETIME NOT NULL, quando VARCHAR(50) DEFAULT NULL, duracao INT DEFAULT NULL, skill VARCHAR(100) DEFAULT NULL, valor NUMERIC(10, 2) DEFAULT NULL, onde INT DEFAULT NULL, tipo VARCHAR(50) DEFAULT NULL, idioma INT DEFAULT NULL, datalhes LONGTEXT DEFAULT NULL, codigo VARCHAR(25) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contato (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(100) DEFAULT NULL, createdAt DATETIME NOT NULL, email VARCHAR(255) NOT NULL, menssagem LONGTEXT DEFAULT NULL, slug VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DF675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('ALTER TABLE evento ADD CONSTRAINT FK_47860B05F675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE fos_user');
        $this->addSql('DROP TABLE evento');
        $this->addSql('DROP TABLE contador');
        $this->addSql('DROP TABLE treinamento');
        $this->addSql('DROP TABLE contato');
    }
}
