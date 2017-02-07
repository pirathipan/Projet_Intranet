<?php
namespace IntranetBundle\Repository;

class UserRepository extends \Doctrine\ORM\EntityRepository
{
  public function findUserRole($user_role)
  {
    return $this->_em->createQueryBuilder('r');
      ->from($this->_entityName, 'r')
      ->where('r.roles LIKE :roles')
      ->setParameter('roles', '%"'.$user_role.'"%');
      ->getQuery()
      ->getResult();
  }
}
