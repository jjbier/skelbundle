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
class Skel implements SkelInterface
{
    /**
     * @var int This is the ID
     */
    protected $propertyA;

    /**
     * @var string This is the name
     */
    protected $propertyB;

    /**
     * @var \Datetime This is the last update object
     */
    protected $propertyC;

    /**
     * @return int
     */
    public function getPropertyA()
    {
        return $this->propertyA;
    }

    /**
     * @param int $propertyA
     */
    public function setPropertyA($propertyA)
    {
        $this->propertyA = $propertyA;
    }

    /**
     * @return string
     */
    public function getPropertyB()
    {
        return $this->propertyB;
    }

    /**
     * @param string $propertyB
     */
    public function setPropertyB($propertyB)
    {
        $this->propertyB = $propertyB;
    }

    /**
     * @return \Datetime
     */
    public function getPropertyC()
    {
        return $this->propertyC;
    }

    /**
     * @param \Datetime $propertyC
     */
    public function setPropertyC($propertyC)
    {
        $this->propertyC = $propertyC;
    }
}