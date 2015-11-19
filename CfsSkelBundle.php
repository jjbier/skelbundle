<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * This class init the bundle
 *
 * Class CfsSkelBundle
 * @package Cfs\SkelBundle
 */
class CfsSkelBundle extends Bundle
{

    /**
     * Builds the bundle.
     *
     * It is only ever called once when the cache is empty.
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     *
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('skel_bundle.root_dir',$this->getPath());
        $container->setParameter('skel_bundle.config_dir_full_path',$this->getPath().'/Resources/config');
        $container->setParameter('skel_bundle.config_dir','Resources/config');
    }
}