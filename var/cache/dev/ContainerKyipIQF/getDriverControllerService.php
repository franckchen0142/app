<?php

namespace ContainerKyipIQF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDriverControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DriverController' shared autowired service.
     *
     * @return \App\Controller\DriverController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DriverController.php';

        $container->services['App\\Controller\\DriverController'] = $instance = new \App\Controller\DriverController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\DriverController', $container));

        return $instance;
    }
}