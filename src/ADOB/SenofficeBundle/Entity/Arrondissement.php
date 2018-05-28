<?php

namespace ADOB\SenofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arrondissement
 *
 * @ORM\Table(name="arrondissement")
 * @ORM\Entity(repositoryClass="ADOB\SenofficeBundle\Repository\ArrondissementRepository")
 */
class Arrondissement
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
     * @ORM\Column(name="nomArrondissement", type="string", length=50)
     */
    private $nomArrondissement;

    /**
     * @ORM\OneToMany(targetEntity = "ADOB\SenofficeBundle\Entity\Carrondissement", mappedBy = "arrondissement")
     */
    private $cArrondissement;

    /**
     * @ORM\ManyToOne(targetEntity="ADOB\SenofficeBundle\Entity\Commune")
     * @ORM\JoinColumn(name = "commune", referencedColumnName = "id")
     */
    private $commune;


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
     * Set nomArrondissement
     *
     * @param string $nomArrondissement
     *
     * @return Arrondissement
     */
    public function setNomArrondissement($nomArrondissement)
    {
        $this->nomArrondissement = $nomArrondissement;

        return $this;
    }

    /**
     * Get nomArrondissement
     *
     * @return string
     */
    public function getNomArrondissement()
    {
        return $this->nomArrondissement;
    }

    /**
     * Get the value of commune
     */ 
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set the value of commune
     *
     * @return  self
     */ 
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get the value of cArrondissement
     */ 
    public function getCArrondissement()
    {
        return $this->cArrondissement;
    }

     /**
      * Set the value of cArrondissement
      *
      * @return  self
      */ 
    public function setCArrondissement($cArrondissement)
    {
        $this->cArrondissement = $cArrondissement;

        return $this;
    }
}

