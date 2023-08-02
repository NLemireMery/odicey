<?php

namespace ContainerVLzDf2o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOdiceyDeactivateGamesCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\OdiceyDeactivateGamesCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\OdiceyDeactivateGamesCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('odicey:deactivate-games', [], 'Deactive games with updates older than 1 year', false, function () use ($container): \App\Command\OdiceyDeactivateGamesCommand {
            return ($container->privates['App\\Command\\OdiceyDeactivateGamesCommand'] ?? $container->load('getOdiceyDeactivateGamesCommandService'));
        });
    }
}