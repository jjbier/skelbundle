<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\ServiceFacker;

use Psr\Log\LoggerInterface;

/**
 * Class FakerServiceImpl
 * @package Cfs\SkelBundle\ServiceFacker
 */
class FakerServiceImpl
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * FakerServiceImpl constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * This method print "TODO" in std out
     *
     * @return void
     */
    public function toDo()
    {
        $this->logger->debug("TODO");

       print "TODO";
    }
}