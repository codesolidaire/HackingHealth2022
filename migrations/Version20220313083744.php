<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220313083744 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient ADD cm_soignant_id_id INT DEFAULT NULL, ADD mr_soignant_id_id INT NOT NULL, ADD ipa_soignant_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB6DDD6D6C FOREIGN KEY (cm_soignant_id_id) REFERENCES soignant (id)');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB4434CC5E FOREIGN KEY (mr_soignant_id_id) REFERENCES soignant (id)');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB3F089210 FOREIGN KEY (ipa_soignant_id_id) REFERENCES soignant (id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EB6DDD6D6C ON patient (cm_soignant_id_id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EB4434CC5E ON patient (mr_soignant_id_id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EB3F089210 ON patient (ipa_soignant_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite CHANGE activite_libelle activite_libelle LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EB6DDD6D6C');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EB4434CC5E');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EB3F089210');
        $this->addSql('DROP INDEX IDX_1ADAD7EB6DDD6D6C ON patient');
        $this->addSql('DROP INDEX IDX_1ADAD7EB4434CC5E ON patient');
        $this->addSql('DROP INDEX IDX_1ADAD7EB3F089210 ON patient');
        $this->addSql('ALTER TABLE patient DROP cm_soignant_id_id, DROP mr_soignant_id_id, DROP ipa_soignant_id_id, CHANGE patient_nom patient_nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE patient_prenom patient_prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE patient_adresse_map patient_adresse_map VARCHAR(500) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE patient_instruction patient_instruction LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE planification CHANGE commentaire commentaire LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE soignant CHANGE soignant_nom soignant_nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE soignant_prenom soignant_prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE soignant_initial soignant_initial VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE territoire CHANGE territoire_libelle territoire_libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
