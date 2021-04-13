<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonPlan
 *
 * @ORM\Table(name="bon_plan", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class BonPlan
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_bp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_bp", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nomBp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_bp", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $typeBp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc_bp", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $descBp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="img_bp", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $imgBp = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu_bp", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $lieuBp = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="prix_bp", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prixBp = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    public function getIdBp(): ?int
    {
        return $this->idBp;
    }

    public function getNomBp(): ?string
    {
        return $this->nomBp;
    }

    public function setNomBp(?string $nomBp): self
    {
        $this->nomBp = $nomBp;

        return $this;
    }

    public function getTypeBp(): ?string
    {
        return $this->typeBp;
    }

    public function setTypeBp(?string $typeBp): self
    {
        $this->typeBp = $typeBp;

        return $this;
    }

    public function getDescBp(): ?string
    {
        return $this->descBp;
    }

    public function setDescBp(?string $descBp): self
    {
        $this->descBp = $descBp;

        return $this;
    }

    public function getImgBp(): ?string
    {
        return $this->imgBp;
    }

    public function setImgBp(?string $imgBp): self
    {
        $this->imgBp = $imgBp;

        return $this;
    }

    public function getLieuBp(): ?string
    {
        return $this->lieuBp;
    }

    public function setLieuBp(?string $lieuBp): self
    {
        $this->lieuBp = $lieuBp;

        return $this;
    }

    public function getPrixBp(): ?float
    {
        return $this->prixBp;
    }

    public function setPrixBp(?float $prixBp): self
    {
        $this->prixBp = $prixBp;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
