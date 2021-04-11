<?php



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


}
