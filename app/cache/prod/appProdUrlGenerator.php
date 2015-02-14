<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'acme_erp_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/erp/hello',    ),  ),  4 =>   array (  ),),
        'acme_erp_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erp/login/',    ),  ),  4 =>   array (  ),),
        'acme_erp_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erp/home/',    ),  ),  4 =>   array (  ),),
        'acme_erp_permiso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::permisoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erp/permiso/',    ),  ),  4 =>   array (  ),),
        'acme_erp_inicio' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erp/',    ),  ),  4 =>   array (  ),),
        'acme_erp_perfilAjax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::perfilAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erp/perfilAjax/',    ),  ),  4 =>   array (  ),),
        'acme_erp_tableroJson' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ErpBundle\\Controller\\DefaultController::tableroJsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erp/tableroJson/',    ),  ),  4 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
