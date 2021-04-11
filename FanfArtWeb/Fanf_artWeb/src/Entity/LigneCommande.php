<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="ligne_commande")
 * @ORM\Entity
 */
class LigneCommande
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
     * @ORM\Column(name="commandeId", type="integer", nullable=false)
     */
    private $commandeid;

    /**
     * @var int
     *
     * @ORM\Column(name="produitId", type="integer", nullable=false)
     */
    private $produitid;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaire", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixunitaire = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=40, nullable=false)
     */
    private $nom;


}
