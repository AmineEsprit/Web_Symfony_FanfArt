<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RatingProduit
 *
 * @ORM\Table(name="rating_produit")
 * @ORM\Entity(repositoryClass="App\Repository\RatingProduitRepository")
 */
class RatingProduit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     */
    private $produit;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return RatingProduit
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set user
     *
     * @param \App\Entity\Client $user
     *
     * @return RatingProduit
     */
    public function setUser(\App\Entity\Client $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\Entity\Client
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set produit
     *
     * @param \App\Entity\Produit $produit
     *
     * @return RatingProduit
     */
    public function setProduit(\App\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \App\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
