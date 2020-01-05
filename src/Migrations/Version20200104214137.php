<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200104214137 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etudiants ADD cni VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD naissance VARCHAR(255) NOT NULL, DROP cin, DROP tel, DROP date_naiss, CHANGE niveau_id niveau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE note CHANGE etudiant_id etudiant_id INT DEFAULT NULL, CHANGE matiere_id matiere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matiere CHANGE prof_id prof_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etudiants ADD cin VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD tel VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD date_naiss VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP cni, DROP email, DROP naissance, CHANGE niveau_id niveau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matiere CHANGE prof_id prof_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE note CHANGE etudiant_id etudiant_id INT DEFAULT NULL, CHANGE matiere_id matiere_id INT DEFAULT NULL');
    }
}
