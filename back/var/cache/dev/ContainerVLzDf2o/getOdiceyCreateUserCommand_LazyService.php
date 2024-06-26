<?php

namespace ContainerVLzDf2o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOdiceyCreateUserCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\OdiceyCreateUserCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\OdiceyCreateUserCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('odicey:create-user', [], 'Create a new user for O\'Dicey', false, function () use ($container): \App\Command\OdiceyCreateUserCommand {
            return ($container->privates['App\\Command\\OdiceyCreateUserCommand'] ?? $container->load('getOdiceyCreateUserCommandService'));
        });
    }
}
