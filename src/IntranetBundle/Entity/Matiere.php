<?php

namespace IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="IntranetBundle\Repository\MatiereRepository")
 */
class Matiere
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="User",  inversedBy="matiere")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userMatiere;


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
     * Set name
     *
     * @param string $name
     * @return Matiere
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    public function __construct()
    {
      $this->userMatiere = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
    *
    * @param \IntranetBundle\Entity\User $user
    *
    * @return matiere
    */
   public function addUser(\IntranetBundle\Entity\User $user)
   {
       $this->userMatiere[] = $user;
       return $this;
   }
}
