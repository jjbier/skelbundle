<?php

/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\EventListener;


use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Cfs\SkelBundle\Event\SkelActionEvents;
use Cfs\SkelBundle\Event\SkelEvent;

/**
 *
 * Class SkelListenerAction
 * @package Cfs\SkelBundle\EventListener
 */
class SkelListenerAction implements EventSubscriberInterface
{

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        array(
            SkelActionEvents::OBJECT_DELETE_COMPLETED => 'onObjectDeleteComplete'
        );
    }

    public function onObjectDeleteComplete(SkelEvent $event)
    {
        // TODO: Implement onObjectDeleteComplete() method.
    }
}