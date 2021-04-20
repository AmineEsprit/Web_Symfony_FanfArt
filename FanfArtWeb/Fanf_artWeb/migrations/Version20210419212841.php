<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210419212841 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE prod_test');
        $this->addSql('ALTER TABLE bon_plan CHANGE nom_bp nom_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE type_bp type_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE img_bp img_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE lieu_bp lieu_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE prix_bp prix_bp DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE categorie_produit CHANGE description_cat description_cat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE client CHANGE id id INT NOT NULL, CHANGE code code VARCHAR(50) DEFAULT \'NULL\', CHANGE Etat Etat VARCHAR(50) DEFAULT \'\'\'Non Verifier\'\'\' NOT NULL, CHANGE nom nom VARCHAR(50) DEFAULT \'NULL\', CHANGE prenom prenom VARCHAR(50) DEFAULT \'NULL\', CHANGE datenai datenai VARCHAR(50) DEFAULT \'NULL\', CHANGE pays pays VARCHAR(50) DEFAULT \'NULL\', CHANGE adresse adresse VARCHAR(500) DEFAULT \'NULL\', CHANGE imgProfil imgProfil VARCHAR(500) DEFAULT \'\'\'nan\'\'\', CHANGE imgVerif imgVerif VARCHAR(500) DEFAULT \'\'\'nan\'\'\'');
        $this->addSql('ALTER TABLE commande CHANGE date date DATETIME DEFAULT \'current_timestamp()\' NOT NULL, CHANGE totalCommandes totalCommandes DOUBLE PRECISION NOT NULL, CHANGE nbProduits nbProduits INT NOT NULL, CHANGE username username VARCHAR(40) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE ligne_commande CHANGE quantite quantite INT NOT NULL, CHANGE prixUnitaire prixUnitaire DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE participation CHANGE id_part id_part INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY produit_ibfk_1');
        $this->addSql('ALTER TABLE produit ADD updated_at DATETIME NOT NULL, CHANGE cat_id cat_id INT DEFAULT NULL, CHANGE image_prod image_prod VARCHAR(255) DEFAULT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('CREATE INDEX user_id ON produit (user_id)');
        $this->addSql('DROP INDEX cat_id ON produit');
        $this->addSql('CREATE INDEX IDX_29A5EC27E6ADA943 ON produit (cat_id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT produit_ibfk_1 FOREIGN KEY (cat_id) REFERENCES categorie_produit (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reclamation CHANGE Date Date VARCHAR(12) DEFAULT \'NULL\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prod_test (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE bon_plan CHANGE nom_bp nom_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE type_bp type_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE img_bp img_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE lieu_bp lieu_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE prix_bp prix_bp DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie_produit CHANGE description_cat description_cat VARCHAR(100) CHARACTER SET utf16 DEFAULT NULL COLLATE `utf16_bin`');
        $this->addSql('ALTER TABLE client CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE code code VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE Etat Etat VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'Non Verifier\' NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE nom nom VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE datenai datenai VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE pays pays VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE imgProfil imgProfil VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT \'nan\' COLLATE `utf8mb4_general_ci`, CHANGE imgVerif imgVerif VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT \'nan\' COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE commande CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE totalCommandes totalCommandes DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE nbProduits nbProduits INT DEFAULT 0 NOT NULL, CHANGE username username VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_bin`');
        $this->addSql('ALTER TABLE ligne_commande CHANGE quantite quantite INT DEFAULT 0 NOT NULL, CHANGE prixUnitaire prixUnitaire DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE participation CHANGE id_part id_part INT NOT NULL');
        $this->addSql('DROP INDEX user_id ON produit');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27E6ADA943');
        $this->addSql('ALTER TABLE produit DROP updated_at, CHANGE cat_id cat_id INT NOT NULL, CHANGE image_prod image_prod VARCHAR(100) CHARACTER SET utf16 DEFAULT NULL COLLATE `utf16_bin`, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('DROP INDEX idx_29a5ec27e6ada943 ON produit');
        $this->addSql('CREATE INDEX cat_id ON produit (cat_id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27E6ADA943 FOREIGN KEY (cat_id) REFERENCES categorie_produit (id)');
        $this->addSql('ALTER TABLE reclamation CHANGE Date Date VARCHAR(12) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
    }
}
