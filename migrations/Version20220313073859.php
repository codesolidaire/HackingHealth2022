<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220313073859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE planification ADD activite_libelle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE planification ADD CONSTRAINT FK_FFC02E1B792DAFF8 FOREIGN KEY (activite_libelle_id) REFERENCES activite (id)');
        $this->addSql('CREATE INDEX IDX_FFC02E1B792DAFF8 ON planification (activite_libelle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite CHANGE activite_libelle activite_libelle LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE planification DROP FOREIGN KEY FK_FFC02E1B792DAFF8');
        $this->addSql('DROP INDEX IDX_FFC02E1B792DAFF8 ON planification');
        $this->addSql('ALTER TABLE planification DROP activite_libelle_id, CHANGE commentaire commentaire LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
