<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\Entity;

use Cfs\SkelBundle\Model\Skel as SkelBase;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;


/**
 *
 * Class Skel
 * @package Cfs\SkelBundle\Entity
 *
 * @Entity()
 * @Table(name="skeles_table_db")
 */
class Skel extends SkelBase
{

    /**
     * @Id()
     * @Column(name="property_a", type="int")
     */
    protected $propertyA;

    /**
     * @Column(name="property_b", type="string")
     */
    protected $propertyB;

    /**
     * @Column(name="property_c", type="datetime")
     */
    protected $propertyC;

}