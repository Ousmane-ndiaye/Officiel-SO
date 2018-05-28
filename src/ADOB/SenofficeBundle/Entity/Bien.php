<?php

namespace ADOB\SenofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="ADOB\SenofficeBundle\Repository\BienRepository")
 */
class Bien
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
     * @var string
     *
     * @ORM\Column(name="nomBien", type="string", length=50)
     */
    private $nomBien;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePub", type="datetime")
     */
    private $datePub;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prixLocation", type="integer")
     */
    private $prixLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreDePlaces", type="integer")
     */
    private $nbreDePlaces;

    /**
     * @ORM\ManyToOne(targetEntity="ADOB\SenofficeBundle\Entity\Carrondissement")
     * @ORM\JoinColumn(name = "Carrondissement", referencedColumnName = "id")
     */
    private $Carrondissement;

    /**
     * @ORM\ManyToOne(targetEntity="ADOB\SenofficeBundle\Entity\Typedebien")
     * @ORM\JoinColumn(name = "typeDeBien", referencedColumnName = "id")
     */
    private $typeDeBien;

    /**
     * @ORM\ManyToOne(targetEntity="ADOB\SenofficeBundle\Entity\Proprietaire")
     * @ORM\JoinColumn(name = "proprietaire", referencedColumnName = "id")
     */
    private $proprietaire;


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
     * Set nomBien
     *
     * @param string $nomBien
     *
     * @return Bien
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Bien
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set datePub
     *
     * @param \DateTime $datePub
     *
     * @return Bien
     */
    public function setDatePub($datePub)
    {
        $this->datePub = $datePub;

        return $this;
    }

    /**
     * Get datePub
     *
     * @return \DateTime
     */
    public function getDatePub()
    {
        return $this->datePub;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prixLocation
     *
     * @param integer $prixLocation
     *
     * @return Bien
     */
    public function setPrixLocation($prixLocation)
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    /**
     * Get prixLocation
     *
     * @return int
     */
    public function getPrixLocation()
    {
        return $this->prixLocation;
    }

    /**
     * Set nbreDePlaces
     *
     * @param integer $nbreDePlaces
     *
     * @return Bien
     */
    public function setNbreDePlaces($nbreDePlaces)
    {
        $this->nbreDePlaces = $nbreDePlaces;

        return $this;
    }

    /**
     * Get nbreDePlaces
     *
     * @return int
     */
    public function getNbreDePlaces()
    {
        return $this->nbreDePlaces;
    }

    /**
     * Get the value of Carrondissement
     */ 
    public function getCarrondissement()
    {
        return $this->Carrondissement;
    }

    /**
     * Set the value of Carrondissement
     *
     * @return  self
     */ 
    public function setCarrondissement($Carrondissement)
    {
        $this->Carrondissement = $Carrondissement;

        return $this;
    }

    /**
     * Get the value of typeDeBien
     */ 
    public function getTypeDeBien()
    {
        return $this->typeDeBien;
    }

    /**
     * Set the value of typeDeBien
     *
     * @return  self
     */ 
    public function setTypeDeBien($typeDeBien)
    {
        $this->typeDeBien = $typeDeBien;

        return $this;
    }

    /**
     * Get the value of proprietaire
     */ 
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     *
     * @return  self
     */ 
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }
}

