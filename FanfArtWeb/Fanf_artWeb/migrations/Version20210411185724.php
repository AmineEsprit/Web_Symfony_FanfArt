<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210411185724 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prod_test (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bon_plan CHANGE nom_bp nom_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE type_bp type_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE img_bp img_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE lieu_bp lieu_bp VARCHAR(255) DEFAULT \'NULL\', CHANGE prix_bp prix_bp DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE categorie_produit CHANGE nom_cat nom_cat VARCHAR(30) DEFAULT \'NULL\', CHANGE description_cat description_cat VARCHAR(100) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE client CHANGE id id INT NOT NULL, CHANGE code code VARCHAR(50) DEFAULT \'NULL\', CHANGE Etat Etat VARCHAR(50) DEFAULT \'\'\'Non Verifier\'\'\' NOT NULL, CHANGE nom nom VARCHAR(50) DEFAULT \'NULL\', CHANGE prenom prenom VARCHAR(50) DEFAULT \'NULL\', CHANGE datenai datenai VARCHAR(50) DEFAULT \'NULL\', CHANGE pays pays VARCHAR(50) DEFAULT \'NULL\', CHANGE adresse adresse VARCHAR(500) DEFAULT \'NULL\', CHANGE imgProfil imgProfil VARCHAR(500) DEFAULT \'\'\'nan\'\'\', CHANGE imgVerif imgVerif VARCHAR(500) DEFAULT \'\'\'nan\'\'\'');
        $this->addSql('ALTER TABLE commande CHANGE date date DATETIME DEFAULT \'current_timestamp()\' NOT NULL, CHANGE totalCommandes totalCommandes DOUBLE PRECISION NOT NULL, CHANGE nbProduits nbProduits INT NOT NULL, CHANGE username username VARCHAR(40) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE ligne_commande CHANGE quantite quantite INT NOT NULL, CHANGE prixUnitaire prixUnitaire DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE participation CHANGE id_part id_part INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE image_prod image_prod VARCHAR(100) DEFAULT \'NULL\', CHANGE nom_prod nom_prod VARCHAR(50) DEFAULT \'NULL\', CHANGE prix_prod prix_prod INT DEFAULT NULL, CHANGE description_prod description_prod VARCHAR(400) DEFAULT \'NULL\', CHANGE quantite_prod quantite_prod INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE Date Date VARCHAR(12) DEFAULT \'NULL\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE prod_test');
        $this->addSql('ALTER TABLE bon_plan CHANGE nom_bp nom_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE type_bp type_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE img_bp img_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE lieu_bp lieu_bp VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE prix_bp prix_bp DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie_produit CHANGE nom_cat nom_cat VARCHAR(30) CHARACTER SET utf16 DEFAULT NULL COLLATE `utf16_bin`, CHANGE description_cat description_cat VARCHAR(100) CHARACTER SET utf16 DEFAULT NULL COLLATE `utf16_bin`');
        $this->addSql('ALTER TABLE client CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE code code VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE Etat Etat VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'Non Verifier\' NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE nom nom VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE datenai datenai VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE pays pays VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE imgProfil imgProfil VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT \'nan\' COLLATE `utf8mb4_general_ci`, CHANGE imgVerif imgVerif VARCHAR(500) CHARACTER SET utf8mb4 DEFAULT \'nan\' COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE commande CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE totalCommandes totalCommandes DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE nbProduits nbProduits INT DEFAULT 0 NOT NULL, CHANGE username username VARCHAR(40) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_bin`');
        $this->addSql('ALTER TABLE ligne_commande CHANGE quantite quantite INT DEFAULT 0 NOT NULL, CHANGE prixUnitaire prixUnitaire DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE participation CHANGE id_part id_part INT NOT NULL');
        $this->addSql('ALTER TABLE produit CHANGE image_prod image_prod VARCHAR(100) CHARACTER SET utf16 DEFAULT NULL COLLATE `utf16_bin`, CHANGE nom_prod nom_prod VARCHAR(50) CHARACTER SET utf16 DEFAULT NULL COLLATE `utf16_bin`, CHANGE prix_prod prix_prod INT DEFAULT NULL, CHANGE description_prod description_prod VARCHAR(400) CHARACTER SET utf16 DEFAULT NULL COLLATE `utf16_bin`, CHANGE quantite_prod quantite_prod INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE Date Date VARCHAR(12) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
    }
}
