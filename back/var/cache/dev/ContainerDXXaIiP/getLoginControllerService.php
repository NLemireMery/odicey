<?php

namespace ContainerDXXaIiP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Backoffice\LoginController' shared autowired service.
     *
     * @return \App\Controller\Backoffice\LoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backoffice/LoginController.php';

        $container->services['App\\Controller\\Backoffice\\LoginController'] = $instance = new \App\Controller\Backoffice\LoginController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Backoffice\\LoginController', $container));

        return $instance;
    }
}
