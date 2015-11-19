# Getting Started With SkelBundle

## Prerequisites

This version of the bundle requires Symfony 2.3+.

## Installation

Installation is a quick (I promise!) 7 step process:

1. Download SkelBundle using composer
2. Enable the Bundle
3. Configure the SkelBundle
4. .........
5. .........
6. .........
7. .........


### Step 1: Download SkelBundle using composer


Require the bundle with composer:

.. code-block:: bash
    $ composer require cfs/skel-bundle "~0.1@dev"

Composer will install the bundle to your project's ``vendor/cfs/skel-bundle`` directory.

###  Step 2: Enable the bundle

Enable the bundle in the kernel::

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new new Cfs\SkelBundle\CfsSkelBundle(),
            // ...
        );
    }
    
### Step 3:  Configure the SkelBundle

# app/config/routing.yml
cfs_skel:
    resource: "@CfsSkelBundle/Resources/config/routing/skel.xml"
    prefix: /skel
    
### Step 4:  ...................
### Step 5:  ...................
### Step 6:  ...................
### Step 7:  ...................
