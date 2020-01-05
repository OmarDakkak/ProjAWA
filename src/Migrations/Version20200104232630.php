<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200104232630 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etudiants CHANGE niveau_id niveau_id INT DEFAULT NULL, CHANGE naissance naissance DATE NOT NULL');
        $this->addSql('ALTER TABLE note CHANGE etudiant_id etudiant_id INT DEFAULT NULL, CHANGE matiere_id matiere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matiere CHANGE prof_id prof_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etudiants CHANGE niveau_id niveau_id INT DEFAULT NULL, CHANGE naissance naissance VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE matiere CHANGE prof_id prof_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE note CHANGE etudiant_id etudiant_id INT DEFAULT NULL, CHANGE matiere_id matiere_id INT DEFAULT NULL');
    }
}
