<?php

namespace Utilisateur\UtilisateurBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * FollowRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FollowRepository extends EntityRepository
{
    public function byNb($profile){
        $req = $this->createQueryBuilder('p')

            ->join('p.followed','f')->select('f')

            ->where('f.username =:profile')
            ->select('count(p)')
            ->orderBy('p.id')
            ->setParameter('profile', $profile);
        return $req->getQuery()->getSingleScalarResult();
    }
}
