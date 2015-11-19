<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 *
 * Class SkelEvent
 * @package Cfs\SkelBundle\Event
 */
class SkelEvent extends Event
{


    /**
     * SkelEvent constructor.
     */
    public function __construct($object1, $object2)
    {
    }

    /**
     * Get Object1 doc
     *
     * @return Object1
     */
    public function getObject1()
    {

    }

    /**
     * Get Object2 doc
     *
     * @return Object2
     */
    public function getObject2()
    {

    }
}