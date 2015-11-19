<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\Manager;

use Cfs\SkelBundle\Repository\SkelRepositoryInterface;
use Cfs\SkelBundle\Model\SkelInterface;

/**
 *
 * Class SkelManager
 * @package Cfs\SkelBundle\Manager
 */
class SkelManager
{

    /**
     * @var SkelRepositoryInterface
     */
    private $repositorySkel;

    /**
     * SkelManager constructor.
     * @param SkelRepositoryInterface $repositorySkel
     */
    public function __construct(SkelRepositoryInterface $repositorySkel)
    {
        $this->repositorySkel = $repositorySkel;
    }

    /**
     * @return SkelRepositoryInterface
     */
    public function getRepositorySkel()
    {
        return $this->repositorySkel;
    }


    /**
     * Save a SkelInterface, if this not exists, If entity exits throw SkelManagerException
     *
     * @param SkelInterface $entity the entity to saved
     *
     * @return void
     * @throws SkelManagerException
     */
    public function save(SkelInterface $entity)
    {
        //TODO before save check if entity exits

        $this->repositorySkel->save($entity);

        //TODO after save
    }

    /**
     * update a SkelInterface, if this not exists throw SkelManagerException other case is update
     *
     * @param SkelInterface $entity the entity to saved
     *
     * @return void
     * @throws SkelManagerException
     */
    public function update(SkelInterface $entity)
    {
        //TODO before save check if entity exits

        $this->repositorySkel->save($entity);

        //TODO after save
    }


    /**
     * Delete a SkelInterface instance.
     *
     * A delete SkelInterface will be removed from the database.
     *
     * @param SkelInterface $entity The entity instance to remove.
     *
     * @return void
     */
    public function delete(SkelInterface $entity)
    {
        //TODO before save

        $this->repositorySkel->delete($entity);

        //TODO after save
    }

    /**
     * Finds all SkelInterface in the repository.
     *
     * @param int $limit  the limit of the result
     * @param int $offset starting from the offset
     *
     * @return SkelInterface[]|null the all SkelInterface.
     */
    public function findAllSkel($limit = null, $offset = 0)
    {
        //TODO before find
        return $this->repositorySkel->findAllSkel($limit, $offset);
        //TODO after find
    }


    /**
     * Finds a single SkelInterface by a set of criteria.
     *
     * @param \DateTime $dateTime the moment find
     * @param array|null $orderBy
     * @param int $limit  the limit of the result
     *
     * @return SkelInterface|null The SkelInterface instance or NULL if the SkelInterface can not be found.
     */
    public function findOneSkeyByPropertyC(\DateTime $dateTime, array $orderBy = null, $limit = null)
    {
        //TODO before find
        return $this->repositorySkel->findOneSkeyByPropertyC($dateTime,$orderBy,$limit);
        //TODO after find
    }

}