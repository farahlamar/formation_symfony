<?php

namespace formation\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert ;

/**
 * Candidature
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Candidature
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     * @Assert\Length(min="3",max="10")
     * @Assert\NotBlank()
     */
    private $auteur;
     /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
    
     */
    private $contenu;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    
    private $date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Candidature
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    

    

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Candidature
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Candidature
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
    
    public function __toString() {
         return $this->getAuteur();;
    }
}
