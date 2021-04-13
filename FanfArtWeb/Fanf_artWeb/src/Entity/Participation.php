<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_part", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPart;

    /**
     * @var int
     *
     * @ORM\Column(name="id_bp", type="integer", nullable=false)
     */
    private $idBp;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_part", type="string", length=255, nullable=false)
     */
    private $commentPart;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=false)
     */
    private $tel;

    public function getIdPart(): ?int
    {
        return $this->idPart;
    }

    public function getIdBp(): ?int
    {
        return $this->idBp;
    }

    public function setIdBp(int $idBp): self
    {
        $this->idBp = $idBp;

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

    public function getCommentPart(): ?string
    {
        return $this->commentPart;
    }

    public function setCommentPart(string $commentPart): self
    {
        $this->commentPart = $commentPart;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }


}
