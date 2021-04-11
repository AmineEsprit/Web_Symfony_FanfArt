<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="numtel", type="string", length=55, nullable=false)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=100, nullable=false)
     */
    private $pwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $code = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=50, nullable=false, options={"default"="'Non Verifier'"})
     */
    private $etat = '\'Non Verifier\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $prenom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="datenai", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $datenai = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pays", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $pays = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $adresse = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="abones", type="text", length=65535, nullable=true, options={"default"="'nan'"})
     */
    private $abones = '\'nan\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="abonnement", type="text", length=65535, nullable=true, options={"default"="'nan'"})
     */
    private $abonnement = '\'nan\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgProfil", type="string", length=500, nullable=true, options={"default"="'nan'"})
     */
    private $imgprofil = '\'nan\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imgVerif", type="string", length=500, nullable=true, options={"default"="'nan'"})
     */
    private $imgverif = '\'nan\'';


}
