<?php

namespace ContainerH3qzmyo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ModeType' shared autowired service.
     *
     * @return \App\Form\ModeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ModeType.php';

        return $container->privates['App\\Form\\ModeType'] = new \App\Form\ModeType();
    }
}