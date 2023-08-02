<?php

namespace ContainerVLzDf2o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FGlaJNPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fGlaJNP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fGlaJNP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mode' => ['privates', '.errored..service_locator.fGlaJNP.App\\Entity\\Mode', NULL, 'Cannot autowire service ".service_locator.fGlaJNP": it references class "App\\Entity\\Mode" but no such service exists.'],
        ], [
            'mode' => 'App\\Entity\\Mode',
        ]);
    }
}