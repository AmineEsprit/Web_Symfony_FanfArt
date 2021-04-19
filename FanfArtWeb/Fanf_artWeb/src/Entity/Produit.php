<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="CategorieProduit")
     * @ORM\JoinColumn(name="cat_id",referencedColumnName="id")
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $categorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_prod", type="string", length=100, nullable=true, options={"default"="NULL"})
     *
     */
    private $imageProd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_prod", type="string", length=50, nullable=true, options={"default"="NULL"})
     * Assert\NotBlank(message="Le champ nom est obligatoire")
     * @Assert\Length(
     *     min = 5,
     *     max = 50,
     *     minMessage = "Le nom doit contenir aux minimum 5 carracteres",
     *     maxMessage = "Le nom doit contenir au maximum 50 carracteres"
     * )
     */
    private $nomProd = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix_prod", type="integer", nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank(message="Le champ prix est obligatoire")
     * @Assert\GreaterThan(
     *     value=0,
     *     message="Le prix doit être supérieur à 0"
     * )
     */
    private $prixProd = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_prod", type="string", length=400, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank(message="Le champ description est obligatoire")
     */
    private $descriptionProd = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantite_prod", type="integer", nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank(message="Le champ quantite est obligatoire")
     * @Assert\GreaterThan(
     *     value=0,
     *     message="La quantite doit être supérieure à 0"
     * )
     *
     */
    private $quantiteProd = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;



    public function getId(): ?int
    {
        return $this->id;
    }


    public function getImageProd(): ?string
    {
        return $this->imageProd;
    }

    public function setImageProd(?string $imageProd): self
    {
        $this->imageProd = $imageProd;

        return $this;
    }

    public function getNomProd(): ?string
    {
        return $this->nomProd;
    }

    public function setNomProd(?string $nomProd): self
    {
        $this->nomProd = $nomProd;

        return $this;
    }

    public function getPrixProd(): ?int
    {
        return $this->prixProd;
    }

    public function setPrixProd(?int $prixProd): self
    {
        $this->prixProd = $prixProd;

        return $this;
    }

    public function getDescriptionProd(): ?string
    {
        return $this->descriptionProd;
    }

    public function setDescriptionProd(?string $descriptionProd): self
    {
        $this->descriptionProd = $descriptionProd;

        return $this;
    }

    public function getQuantiteProd(): ?int
    {
        return $this->quantiteProd;
    }

    public function setQuantiteProd(?int $quantiteProd): self
    {
        $this->quantiteProd = $quantiteProd;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getAbsolutePath()
    {
        return null === $this->imageProd
            ? null
            : $this->getUploadRootDir().'/'.$this->imageProd;
    }
    public function getWebPath()
    {
        return null===$this->imageProd ? null : $this->getUploadDir().'/'.$this->imageProd;
    }
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
    protected function getUploadDir()
    {
        return 'images';
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    public function UploadProfilePicture()
    {
        $this->file->move($this->getUploadRootDir(),$this->file->getClientOriginalName());
        $this->imageProd=$this->file->getClientOriginalName();
        $this->file=null;
    }

    public function getCategorie(): ?int
    {
        return $this->categorie;
    }

    public function setCategorie(int $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }




}
