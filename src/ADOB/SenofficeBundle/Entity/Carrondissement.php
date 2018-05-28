<?php

namespace ADOB\SenofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrondissement
 *
 * @ORM\Table(name="carrondissement")
 * @ORM\Entity(repositoryClass="ADOB\SenofficeBundle\Repository\CarrondissementRepository")
 */
class Carrondissement
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
     * @ORM\Column(name="nomCA", type="string", length=50)
     */
    private $nomCA;

    /**
     * @ORM\ManyToOne(targetEntity="ADOB\SenofficeBundle\Entity\Arrondissement", inversedBy="cArrondissement")
     * @ORM\JoinColumn(name = "arrondissement", referencedColumnName = "id")
     */
    private $arrondissement;


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
     * Set nomCA
     *
     * @param string $nomCA
     *
     * @return Carrondissement
     */
    public function setNomCA($nomCA)
    {
        $this->nomCA = $nomCA;

        return $this;
    }

    /**
     * Get nomCA
     *
     * @return string
     */
    public function getNomCA()
    {
        return $this->nomCA;
    }

    /**
     * Get the value of arrondissement
     */ 
    public function getArrondissement()
    {
        return $this->arrondissement;
    }

    /**
     * Set the value of arrondissement
     *
     * @return  self
     */ 
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }
}

