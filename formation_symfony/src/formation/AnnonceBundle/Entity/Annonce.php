<?php

namespace formation\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="formation\AnnonceBundle\Entity\AnnonceRepository")
 */
class Annonce
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    
    private $date;
    
    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string",length=255)
     */
    private $auteur;
    
    /**
     * @ORM\ManyToOne(targetEntity="formation\AnnonceBundle\Entity\Categorie")
     * 
     */
    private $Categorie;
    
    /**
     *  @ORM\ManyToMany(targetEntity="formation\AnnonceBundle\Entity\Condidature")
     * 
     */
    private $condidatures ;
    
    
    
    
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
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Annonce
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
     * @return Annonce
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
     * @return Annonce
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

    /**
     * Set Categorie
     *
     * @param \formation\AnnonceBundle\Entity\Categorie $categorie
     * @return Annonce
     */
    public function setCategorie(\formation\AnnonceBundle\Entity\Categorie $categorie = null)
    {
        $this->Categorie = $categorie;

        return $this;
    }

    /**
     * Get Categorie
     *
     * @return \formation\AnnonceBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->Categorie;
    }
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->condidatures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add condidatures
     *
     * @param \formation\AnnonceBundle\Entity\Condidature $condidatures
     * @return Annonce
     */
    public function addCondidature(\formation\AnnonceBundle\Entity\Condidature $condidatures)
    {
        $this->condidatures[] = $condidatures;

        return $this;
    }

    /**
     * Remove condidatures
     *
     * @param \formation\AnnonceBundle\Entity\Condidature $condidatures
     */
    public function removeCondidature(\formation\AnnonceBundle\Entity\Condidature $condidatures)
    {
        $this->condidatures->removeElement($condidatures);
    }

    /**
     * Get condidatures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCondidatures()
    {
        return $this->condidatures;
    }
}
