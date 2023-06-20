<?php

namespace ContainerDXXaIiP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P2WjH8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P2WjH_8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.P2WjH_8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'character' => ['privates', '.errored..service_locator.P2WjH_8.App\\Entity\\Character', NULL, 'Cannot autowire service ".service_locator.P2WjH_8": it references class "App\\Entity\\Character" but no such service exists.'],
        ], [
            'character' => 'App\\Entity\\Character',
        ]);
    }
}
