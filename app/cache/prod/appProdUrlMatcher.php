<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        if (0 === strpos($pathinfo, '/erp')) {
            // acme_erp_homepage
            if (0 === strpos($pathinfo, '/erp/hello') && preg_match('#^/erp/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_erp_homepage')), array (  '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::indexAction',));
            }

            // acme_erp_login
            if (rtrim($pathinfo, '/') === '/erp/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_erp_login');
                }

                return array (  '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::loginAction',  '_route' => 'acme_erp_login',);
            }

            // acme_erp_home
            if (rtrim($pathinfo, '/') === '/erp/home') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_erp_home');
                }

                return array (  '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::homeAction',  '_route' => 'acme_erp_home',);
            }

            // acme_erp_permiso
            if (rtrim($pathinfo, '/') === '/erp/permiso') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_erp_permiso');
                }

                return array (  '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::permisoAction',  '_route' => 'acme_erp_permiso',);
            }

            // acme_erp_inicio
            if (rtrim($pathinfo, '/') === '/erp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_erp_inicio');
                }

                return array('_route' => 'acme_erp_inicio');
            }

            // acme_erp_perfilAjax
            if (rtrim($pathinfo, '/') === '/erp/perfilAjax') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_erp_perfilAjax');
                }

                return array (  '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::perfilAjaxAction',  '_route' => 'acme_erp_perfilAjax',);
            }

            // acme_erp_tableroJson
            if (rtrim($pathinfo, '/') === '/erp/tableroJson') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_erp_tableroJson');
                }

                return array (  '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::tableroJsonAction',  '_route' => 'acme_erp_tableroJson',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
