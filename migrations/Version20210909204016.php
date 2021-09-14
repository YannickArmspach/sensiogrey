<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210909204016 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE linotype_file (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linotype_meta (id INT AUTO_INCREMENT NOT NULL, context_key VARCHAR(255) NOT NULL, context_value LONGTEXT DEFAULT NULL, template_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linotype_option (id INT AUTO_INCREMENT NOT NULL, option_key VARCHAR(255) NOT NULL, option_value LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linotype_template (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(255) NOT NULL, template_key VARCHAR(255) NOT NULL, template_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linotype_translate (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, lang VARCHAR(255) NOT NULL, context_key VARCHAR(255) NOT NULL, template_id VARCHAR(255) NOT NULL, trans_id VARCHAR(255) NOT NULL, trans_value LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE linotype_user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B01D9692F85E0677 (username), UNIQUE INDEX UNIQ_B01D9692E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE linotype_file');
        $this->addSql('DROP TABLE linotype_meta');
        $this->addSql('DROP TABLE linotype_option');
        $this->addSql('DROP TABLE linotype_template');
        $this->addSql('DROP TABLE linotype_translate');
        $this->addSql('DROP TABLE linotype_user');
    }
}
