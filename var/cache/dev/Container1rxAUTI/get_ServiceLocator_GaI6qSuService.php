<?php

namespace Container1rxAUTI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GaI6qSuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gaI6qSu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gaI6qSu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'driverRepository' => ['privates', 'App\\Repository\\DriverRepository', 'getDriverRepositoryService', true],
        ], [
            'driverRepository' => 'App\\Repository\\DriverRepository',
        ]);
    }
}
