<?php

namespace Container1rxAUTI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hx0mXizService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Hx0mXiz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Hx0mXiz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'galery' => ['privates', '.errored..service_locator.Hx0mXiz.App\\Entity\\Galery', NULL, 'Cannot autowire service ".service_locator.Hx0mXiz": it references class "App\\Entity\\Galery" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'galery' => 'App\\Entity\\Galery',
            'manager' => '?',
        ]);
    }
}
