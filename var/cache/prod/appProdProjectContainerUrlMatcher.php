<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/sen-office')) {
            // accueil
            if ('/sen-office/accueil' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_accueil;
                }

                return array (  '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::indexAction',  '_route' => 'accueil',);
            }
            not_accueil:

            // catalogue
            if ('/sen-office/catalogue' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_catalogue;
                }

                return array (  '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::catalogueAction',  '_route' => 'catalogue',);
            }
            not_catalogue:

            // adob_senoffice_front_selectcommune
            if ('/sen-office/select/commune' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_adob_senoffice_front_selectcommune;
                }

                return array (  '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::selectCommuneAction',  '_route' => 'adob_senoffice_front_selectcommune',);
            }
            not_adob_senoffice_front_selectcommune:

            // partager/salle
            if ('/sen-office/partager/salle' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_partagersalle;
                }

                return array (  '_controller' => 'ADOB\\SenofficeBundle\\Controller\\FrontController::ajoutSalleAction',  '_route' => 'partager/salle',);
            }
            not_partagersalle:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
