<?php

namespace ContainerH3qzmyo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStatsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\StatsType' shared autowired service.
     *
     * @return \App\Form\StatsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/StatsType.php';

        return $container->privates['App\\Form\\StatsType'] = new \App\Form\StatsType();
    }
}
