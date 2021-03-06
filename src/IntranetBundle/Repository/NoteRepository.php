<?php

namespace IntranetBundle\Repository;

/**
 * NoteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NoteRepository extends \Doctrine\ORM\EntityRepository
{
  public function findUserMatiere($user){
    $query = $this->createQueryBuilder('u')
      ->where('u.user =:user')
      ->setParameter('user', $user)
      ->getQuery()
      ->getResult();
  }

  public function findMatiere($matiere){
    $query = $this->createQueryBuilder('m')
      ->where('m.matiere =:matiere')
      ->setParameter('matiere', $matiere)
      ->getQuery()
      ->getResult();
  }

}
