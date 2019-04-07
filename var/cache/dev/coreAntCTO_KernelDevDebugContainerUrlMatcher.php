<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class coreAntCTO_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin/register.html' => [[['_route' => '_register', '_controller' => 'AntCTO\\AdminController\\RegistrationController::index'], null, null, null, false, false, null]],
            '/admin/login.html' => [[['_route' => '_login', '_controller' => 'AntCTO\\AdminController\\SecurityController::login'], null, null, null, false, false, null]],
            '/admin/check.html' => [[['_route' => '_login_check', '_controller' => 'AntCTO\\AdminController\\SecurityController::checkAction'], null, null, null, false, false, null]],
            '/admin/logout.html' => [[['_route' => '_logout', '_controller' => 'AntCTO\\AdminController\\SecurityController::logoutAction'], null, null, null, false, false, null]],
            '/demo' => [[['_route' => 'demo', '_controller' => 'AntCTO\\Theme\\Controller\\DemoController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        ];
    }
}
