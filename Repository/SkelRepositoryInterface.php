<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\Repository;

use Doctrine\DBAL\LockMode;
use Cfs\SkelBundle\Model\SkelInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 *
 * Class SkelRepositoryInterface
 * @package Cfs\SkelBundle\Repository
 */
interface SkelRepositoryInterface
{
    /**
     * Save a SkelInterface, if this not exists is created, other case is update
     *
     * @param SkelInterface $entity the entity to saved
     * @param bool $flush  if true persist in the moment, if false, put in commit, use flushAll(),
     *      for persists all commits
     * @return void
     */
    public function save(SkelInterface $entity, $flush = true);


    /**
     * Delete a SkelInterface instance.
     *
     * A delete SkelInterface will be removed from the database.
     *
     * @param SkelInterface $entity The entity instance to remove.
     * @param bool $flush if true persist in the moment, if false, put in commit, use flushAll(),
     *      for persists all commits
     *
     * @return void
     */
    public function delete(SkelInterface $entity, $flush = true);

    /**
     * Finds all SkelInterface in the repository.
     *
     * @param int $limit  the limit of the result
     * @param int $offset starting from the offset
     *
     * @return SkelInterface[]|null the all SkelInterface.
     */
    public function findAllSkel($limit = null, $offset = 0);


    /**
     * Finds a single SkelInterface by a set of criteria.
     *
     * @param \DateTime $dateTime the moment find
     * @param array|null $orderBy
     * @param int $limit  the limit of the result
     *
     * @return SkelInterface|null The SkelInterface instance or NULL if the SkelInterface can not be found.
     */
    public function findOneSkeyByPropertyC(\DateTime $dateTime, array $orderBy = null, $limit = null);


}