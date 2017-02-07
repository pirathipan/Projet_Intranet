<?php

namespace IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="IntranetBundle\Repository\NoteRepository")
 */
class Note
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
   * @var int
   *
   * @ORM\Column(name="score", type="integer")
   */
  private $score;

  /**
   * @var string
   *
   * @ORM\Column(name="comment", type="string", length=255)
   */
  private $comment;
  /**
   * @ORM\ManyToOne(targetEntity="IntranetBundle\Entity\User")
   *
   */
  private $user;
  /**
   * @ORM\ManyToOne(targetEntity="IntranetBundle\Entity\Matiere")
   * @ORM\JoinColumn(nullable=false)
   *
   */
  private $matiere;

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
   * Set score
   *
   * @param integer $score
   *
   * @return Note
   */
  public function setScore($score)
  {
    $this->score = $score;
    return $this;
  }

  /**
   * Get score
   *
   * @return int
   */
  public function getScore()
  {
    return $this->score;
  }

  /**
   * Set comment
   *
   * @param string $comment
   *
   * @return Note
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
    return $this;
  }

  /**
   * Get comment
   *
   * @return string
   */
  public function getComment()
  {
      return $this->comment;
  }

   /**
     * Set User
     *
     * @param User
     *
     * @return Grade
     */
    public function setUser(\IntranetBundle\Entity\User $user)
    {
      $this->user = $user;
      return $this;
    }

    /**
     * Get matiere
     *
     * @return \IntranetBundle\Entity\matiere
     */
    public function getUser()
    {
      return $this->user;
    }
    /**
      * Set matiere
      *
      * @param Matiere
      *
      * @return Grade
      */
     public function setMatiere(\IntranetBundle\Entity\Matiere $matiere)
     {
       $this->matiere = $matiere;
       return $this;
     }

     /**
      * Get matiere
      *
      * @return \IntranetBundle\Entity\matiere
      */
     public function getMatiere()
     {
      return $this->matiere;
     }
}
