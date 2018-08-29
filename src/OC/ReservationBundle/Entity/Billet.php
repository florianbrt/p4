<?php

namespace OC\ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billet
 *
 * @ORM\Table(name="billet")
 * @ORM\Entity(repositoryClass="OC\ReservationBundle\Repository\BilletRepository")
 */
class Billet
{

    /**
     * @ORM\OneToOne(targetEntity="OC\ReservationBundle\Entity\Prix", cascade={"persist"})
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="OC\ReservationBundle\Entity\Commande", inversedBy="billets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255)
     */
    private $nationalite;

    /**
     * @var bool
     *
     * @ORM\Column(name="reduction", type="boolean")
     */
    private $reduction;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Billet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Billet
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance.
     *
     * @param \DateTime $dateNaissance
     *
     * @return Billet
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance.
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set nationalite.
     *
     * @param string $nationalite
     *
     * @return Billet
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite.
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set reduction.
     *
     * @param bool $reduction
     *
     * @return Billet
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction.
     *
     * @return bool
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set prix.
     *
     * @param \OC\ReservationBundle\Entity\Prix|null $prix
     *
     * @return Billet
     */
    public function setPrix(\OC\ReservationBundle\Entity\Prix $prix = null)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return \OC\ReservationBundle\Entity\Prix|null
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set commande.
     *
     * @param \OC\ReservationBundle\Entity\Commande $commande
     *
     * @return Billet
     */
    public function setCommande(\OC\ReservationBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande.
     *
     * @return \OC\ReservationBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }
}