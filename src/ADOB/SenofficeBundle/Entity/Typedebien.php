<?php

namespace ADOB\SenofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typedebien
 *
 * @ORM\Table(name="typedebien")
 * @ORM\Entity(repositoryClass="ADOB\SenofficeBundle\Repository\TypedebienRepository")
 */
class Typedebien
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
     * @ORM\Column(name="nomType", type="string", length=50)
     */
    private $nomType;


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
     * Set nomType
     *
     * @param string $nomType
     *
     * @return Typedebien
     */
    public function setNomType($nomType)
    {
        $this->nomType = $nomType;

        return $this;
    }

    /**
     * Get nomType
     *
     * @return string
     */
    public function getNomType()
    {
        return $this->nomType;
    }
}

