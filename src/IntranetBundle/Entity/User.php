<?php

namespace IntranetBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;


  /**
   * @ORM\ManyToMany(targetEntity="Matiere", mappedBy="user")
   */
  private $matiere;

  public function __construct()
  {
    parent::__construct();
  }

  /**
  *
  * @param \IntranetBundle\Entity\matiere $matiere
  *
  * @return User
  */
  public function addMatiere($matiere)
  {
    $this->matiere[] = $matiere;
    return $this;
  }

  /**
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getMatiere()
  {
      return $this->matiere;
  }
}
