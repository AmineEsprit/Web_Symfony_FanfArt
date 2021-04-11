<?php



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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getNumtel(): string
    {
        return $this->numtel;
    }

    /**
     * @param string $numtel
     */
    public function setNumtel(string $numtel): void
    {
        $this->numtel = $numtel;
    }

    /**
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param string $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = $pwd;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getEtat(): string
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */
    public function setPrenom(?string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string|null
     */
    public function getDatenai(): ?string
    {
        return $this->datenai;
    }

    /**
     * @param string|null $datenai
     */
    public function setDatenai(?string $datenai): void
    {
        $this->datenai = $datenai;
    }

    /**
     * @return string|null
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * @param string|null $pays
     */
    public function setPays(?string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * @param string|null $adresse
     */
    public function setAdresse(?string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string|null
     */
    public function getAbones(): ?string
    {
        return $this->abones;
    }

    /**
     * @param string|null $abones
     */
    public function setAbones(?string $abones): void
    {
        $this->abones = $abones;
    }

    /**
     * @return string|null
     */
    public function getAbonnement(): ?string
    {
        return $this->abonnement;
    }

    /**
     * @param string|null $abonnement
     */
    public function setAbonnement(?string $abonnement): void
    {
        $this->abonnement = $abonnement;
    }

    /**
     * @return string|null
     */
    public function getImgprofil(): ?string
    {
        return $this->imgprofil;
    }

    /**
     * @param string|null $imgprofil
     */
    public function setImgprofil(?string $imgprofil): void
    {
        $this->imgprofil = $imgprofil;
    }

    /**
     * @return string|null
     */
    public function getImgverif(): ?string
    {
        return $this->imgverif;
    }

    /**
     * @param string|null $imgverif
     */
    public function setImgverif(?string $imgverif): void
    {
        $this->imgverif = $imgverif;
    }


}
