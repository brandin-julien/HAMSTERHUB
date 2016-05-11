<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // video_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'video_homepage');
            }

            return array (  '_controller' => 'VideoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'video_homepage',);
        }

        // video_id
        if (0 === strpos($pathinfo, '/video') && preg_match('#^/video(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_id')), array (  '_controller' => 'VideoBundle\\Controller\\DefaultController::videoAction',  'id' => 1,));
        }

        // video_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'VideoBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'video_upload',);
        }

        // video_myVideos
        if ($pathinfo === '/myVideos') {
            return array (  '_controller' => 'VideoBundle\\Controller\\DefaultController::myVideosAction',  '_route' => 'video_myVideos',);
        }

        // video_userVideo
        if (0 === strpos($pathinfo, '/userVideo') && preg_match('#^/userVideo(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_userVideo')), array (  '_controller' => 'VideoBundle\\Controller\\DefaultController::userVideoAction',  'id' => 1,));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
