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

/**
 *
 * Class SkelActionEvents
 * @package Cfs\SkelBundle\Event
 */
final class SkelActionEvents
{

    /**
     * The OBJECT_DELETE_COMPLETED event occurs after deleting the  ....
     *
     * The event listener method receives a Cfs\SkelBundle\Event\SkelEvent instance.
     */
    const OBJECT_DELETE_COMPLETED = 'cfs.skel_object.delete.completed';
}