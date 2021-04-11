<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
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
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     */
    private $catId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_prod", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $imageProd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_prod", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nomProd = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix_prod", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $prixProd = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_prod", type="string", length=400, nullable=true, options={"default"="NULL"})
     */
    private $descriptionProd = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantite_prod", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $quantiteProd = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


}
