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


}
