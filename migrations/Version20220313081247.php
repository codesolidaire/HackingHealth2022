<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220313081247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient ADD territoire_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB1F95C8A9 FOREIGN KEY (territoire_id_id) REFERENCES territoire (id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EB1F95C8A9 ON patient (territoire_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite CHANGE activite_libelle activite_libelle LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EB1F95C8A9');
        $this->addSql('DROP INDEX IDX_1ADAD7EB1F95C8A9 ON patient');
        $this->addSql('ALTER TABLE patient DROP territoire_id_id, CHANGE patient_nom patient_nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE patient_prenom patient_prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE patient_adresse_map patient_adresse_map VARCHAR(500) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE patient_instruction patient_instruction LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE planification CHANGE commentaire commentaire LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE territoire CHANGE territoire_libelle territoire_libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
