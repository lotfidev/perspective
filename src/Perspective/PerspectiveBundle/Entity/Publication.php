<?php

namespace Perspective\PerspectiveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Perspective\PerspectiveBundle\Repository\PublicationRepository")
 */
class Publication
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
     * @ORM\ManyToOne(targetEntity="Utilisateur\UtilisateurBundle\Entity\Utilisateur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Perspective\PerspectiveBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="views_publication", type="integer")
     */
    private $viewsPublication;

    /**
     * @var string
     *
     * @ORM\Column(name="title_publication", type="text")
     */
    private $titlePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="description_publication", type="text")
     */
    private $descriptionPublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="date")
     */
    private $datePublication;


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
     * Set datePublication
     *
     * @param \DateTime $datePublication
     * @return Publication
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime 
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set titlePublication
     *
     * @param string $titlePublication
     * @return Publication
     */
    public function setTitlePublication($titlePublication)
    {
        $this->titlePublication = $titlePublication;

        return $this;
    }

    /**
     * Get titlePublication
     *
     * @return string 
     */
    public function getTitlePublication()
    {
        return $this->titlePublication;
    }

    /**
     * Set categorie
     *
     * @param \Perspective\PerspectiveBundle\Entity\Categorie $categorie
     * @return Publication
     */
    public function setCategorie(\Perspective\PerspectiveBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Perspective\PerspectiveBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set descriptionPublication
     *
     * @param string $descriptionPublication
     * @return Publication
     */
    public function setDescriptionPublication($descriptionPublication)
    {
        $this->descriptionPublication = $descriptionPublication;

        return $this;
    }

    /**
     * Get descriptionPublication
     *
     * @return string 
     */
    public function getDescriptionPublication()
    {
        return $this->descriptionPublication;
    }

    /**
     * Set user
     *
     * @param \Utilisateur\UtilisateurBundle\Entity\Utilisateur $user
     * @return Publication
     */
    public function setUser(\Utilisateur\UtilisateurBundle\Entity\Utilisateur $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Utilisateur\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set viewsPublication
     *
     * @param integer $viewsPublication
     * @return Publication
     */
    public function setViewsPublication($viewsPublication)
    {
        $this->viewsPublication = $viewsPublication;

        return $this;
    }

    /**
     * Get viewsPublication
     *
     * @return integer 
     */
    public function getViewsPublication()
    {
        return $this->viewsPublication;
    }
}
