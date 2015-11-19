<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\Model;

/**
 *
 * Class Skel
 * @package Cfs\SkelBundle\Model
 */
interface SkelInterface
{
    /**
     * @return int
     */
    public function getPropertyA();

    /**
     * @param int $propertyA
     */
    public function setPropertyA($propertyA);

    /**
     * @return string
     */
    public function getPropertyB();

    /**
     * @param string $propertyB
     */
    public function setPropertyB($propertyB);

    /**
     * @return \Datetime
     */
    public function getPropertyC();

    /**
     * @param \Datetime $propertyC
     */
    public function setPropertyC($propertyC);
}