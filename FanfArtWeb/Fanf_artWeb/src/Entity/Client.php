<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numtel", type="string", length=55, nullable=false)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=100, nullable=false)
     */
    private $pwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $code = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=50, nullable=false, options={"default"="'Non Verifier'"})
     */
    private $etat = '\'Non Verifier\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $prenom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="datenai", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $datenai = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pays", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $pays = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $adresse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="abones", type="text", length=65535, nullable=true, options={"default"="'nan'"})
     */
    private $abones = '\'nan\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="abonnement", type="text", length=65535, nullable=true, options={"default"="'nan'"})
     */
    private $abonnement = '\'nan\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgProfil", type="string", length=500, nullable=true, options={"default"="'nan'"})
     */
    private $imgprofil = '\'nan\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgVerif", type="string", length=500, nullable=true, options={"default"="'nan'"})
     */
    private $imgverif = '\'nan\'';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenai(): ?string
    {
        return $this->datenai;
    }

    public function setDatenai(?string $datenai): self
    {
        $this->datenai = $datenai;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAbones(): ?string
    {
        return $this->abones;
    }

    public function setAbones(?string $abones): self
    {
        $this->abones = $abones;

        return $this;
    }

    public function getAbonnement(): ?string
    {
        return $this->abonnement;
    }

    public function setAbonnement(?string $abonnement): self
    {
        $this->abonnement = $abonnement;

        return $this;
    }

    public function getImgprofil(): ?string
    {
        return $this->imgprofil;
    }

    public function setImgprofil(?string $imgprofil): self
    {
        $this->imgprofil = $imgprofil;

        return $this;
    }

    public function getImgverif(): ?string
    {
        return $this->imgverif;
    }

    public function setImgverif(?string $imgverif): self
    {
        $this->imgverif = $imgverif;

        return $this;
    }


}
