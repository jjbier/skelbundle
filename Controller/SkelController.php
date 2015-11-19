<?php
/*
 * This file is part of the bundle-skel package.
 *
 * (c) Confirmsign <https://bitbucket.org/confirmsign-ondemand/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cfs\SkelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SkelController extends Controller
{

    /**
     * Get Skel Manager
     *
     * @return \Cfs\SkelBundle\Manager\SkelManager
     */
    protected final function getSkelManager()
    {
        return $this->container->get('cfs_skel.manager.skel');
    }


    /**
     * Show TODO Skel
     *
     * @param Request $request
     * @return JsonResponse|Response
     * @Template(template="CfsSkelBundle:Skel:todo.html.twig")
     */
    public function todoAction(Request $request)
    {
        $skels = $this->getSkelManager()->findAllSkel();

        if($request->isXmlHttpRequest()){
            return new JsonResponse($skels);
        }elseif($request->isMethod('POST')){
            return new Response($skels);
        }else{
            return array(
              'greeting' => 'Hello',
              'skels' => $skels
            );
        }
    }

}