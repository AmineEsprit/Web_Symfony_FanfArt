<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieProduit
 *
 * @ORM\Table(name="categorie_produit")
 * @ORM\Entity
 */
class CategorieProduit
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
     * @var string|null
     *
     * @ORM\Column(name="nom_cat", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $nomCat = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_cat", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $descriptionCat = 'NULL';


}
