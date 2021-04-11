<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity
 */
class Commande
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
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $date = 'current_timestamp()';

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false, options={"default"="1"})
     */
    private $etat = 1;

    /**
     * @var float
     *
     * @ORM\Column(name="totalCommandes", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalcommandes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nbProduits", type="integer", nullable=false)
     */
    private $nbproduits = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $username = 'NULL';


}
