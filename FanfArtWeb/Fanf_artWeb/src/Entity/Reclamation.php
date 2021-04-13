<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDRec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrec;

    /**
     * @var int
     *
     * @ORM\Column(name="IDUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="IDProd", type="integer", nullable=false)
     */
    private $idprod;

    /**
     * @var int
     *
     * @ORM\Column(name="TypeRec", type="integer", nullable=false)
     */
    private $typerec;

    /**
     * @var string
     *
     * @ORM\Column(name="Rec", type="string", length=255, nullable=false)
     */
    private $rec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Date", type="string", length=12, nullable=true, options={"default"="NULL"})
     */
    private $date = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdprod(): ?int
    {
        return $this->idprod;
    }

    public function setIdprod(int $idprod): self
    {
        $this->idprod = $idprod;

        return $this;
    }

    public function getTyperec(): ?int
    {
        return $this->typerec;
    }

    public function setTyperec(int $typerec): self
    {
        $this->typerec = $typerec;

        return $this;
    }

    public function getRec(): ?string
    {
        return $this->rec;
    }

    public function setRec(string $rec): self
    {
        $this->rec = $rec;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }


}
