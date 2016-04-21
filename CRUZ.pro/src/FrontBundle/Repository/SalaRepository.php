<?php

namespace FrontBundle\Repository;

/**
 * SalaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SalaRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByMinPosti($numeroPosti)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT s FROM FrontBundle:Sala s WHERE s.posti >= :posti'
            )
            ->setParameter('posti', $numeroPosti)
            ->getResult();
    }
}
