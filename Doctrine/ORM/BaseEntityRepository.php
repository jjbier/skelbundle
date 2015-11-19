<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\Doctrine\ORM;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

/**
 *
 * Class BaseEntityRepository
 * @package Cfs\SkelBundle\Doctrine\ORM
 */
abstract class BaseEntityRepository extends EntityRepository
{
    /**
     * Initializes a new <tt>EntityRepository</tt>.
     *
     * @param EntityManagerInterface         $em    The EntityManager to use.
     * @param string $class The class descriptor.
     */
    public function __construct(EntityManagerInterface $em,$class)
    {
        parent::__construct($em,new ClassMetadata($class));
    }

    /**
     * Persist all commits
     */
    public function flushAll()
    {
        $this->getEntityManager()->flush();
    }
}