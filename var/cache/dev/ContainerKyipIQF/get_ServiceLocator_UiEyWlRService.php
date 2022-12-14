<?php

namespace ContainerKyipIQF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UiEyWlRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uiEyWlR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uiEyWlR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'driver' => ['privates', '.errored..service_locator.uiEyWlR.App\\Entity\\Driver', NULL, 'Cannot autowire service ".service_locator.uiEyWlR": it references class "App\\Entity\\Driver" but no such service exists.'],
        ], [
            'driver' => 'App\\Entity\\Driver',
        ]);
    }
}
