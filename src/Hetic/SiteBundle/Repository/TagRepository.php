<?php
// src/Acme/StoreBundle/Entity/ProductRepository.php
namespace Hetic\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Hetic\SiteBundle\Entity\Category;

class TagRepository extends EntityRepository
{
    public function getTags()
    {
        $queryBuilder = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('m')
            ->from('Hetic\SiteBundle\Entity\Tag', 'm')
            ->orderBy('m.id', 'DESC');
        return $queryBuilder;
    }

}