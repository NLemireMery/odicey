<?php

namespace ContainerDXXaIiP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Backoffice\MainController' shared autowired service.
     *
     * @return \App\Controller\Backoffice\MainController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Backoffice/MainController.php';

        $container->services['App\\Controller\\Backoffice\\MainController'] = $instance = new \App\Controller\Backoffice\MainController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Backoffice\\MainController', $container));

        return $instance;
    }
}
