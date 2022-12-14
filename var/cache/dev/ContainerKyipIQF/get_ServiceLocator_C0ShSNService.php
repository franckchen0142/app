<?php

namespace ContainerKyipIQF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C0ShSNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C0ShSN_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C0ShSN_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CompanyController::index' => ['privates', '.service_locator.kKm6Qt1', 'get_ServiceLocator_KKm6Qt1Service', true],
            'App\\Controller\\DriverController::delete' => ['privates', '.service_locator.FhAR7n9', 'get_ServiceLocator_FhAR7n9Service', true],
            'App\\Controller\\DriverController::edit' => ['privates', '.service_locator.FhAR7n9', 'get_ServiceLocator_FhAR7n9Service', true],
            'App\\Controller\\DriverController::index' => ['privates', '.service_locator.gaI6qSu', 'get_ServiceLocator_GaI6qSuService', true],
            'App\\Controller\\DriverController::insert' => ['privates', '.service_locator.1XBJyM5', 'get_ServiceLocator_1XBJyM5Service', true],
            'App\\Controller\\DriverController::new' => ['privates', '.service_locator.gaI6qSu', 'get_ServiceLocator_GaI6qSuService', true],
            'App\\Controller\\DriverController::photo' => ['privates', '.service_locator.YlxcikI', 'get_ServiceLocator_YlxcikIService', true],
            'App\\Controller\\DriverController::show' => ['privates', '.service_locator.uiEyWlR', 'get_ServiceLocator_UiEyWlRService', true],
            'App\\Controller\\GaleryController::addImage' => ['privates', '.service_locator.Hx0mXiz', 'get_ServiceLocator_Hx0mXizService', true],
            'App\\Controller\\GaleryController::delete' => ['privates', '.service_locator.lO5TKjj', 'get_ServiceLocator_LO5TKjjService', true],
            'App\\Controller\\MailerController::send' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\ProfileController::index' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.pHwQa0.', 'get_ServiceLocator_PHwQa0_Service', true],
            'App\\Controller\\SecurityController::forgottenPassword' => ['privates', '.service_locator.VS7mWl.', 'get_ServiceLocator_VS7mWl_Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::resetPass' => ['privates', '.service_locator.kXYwonB', 'get_ServiceLocator_KXYwonBService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\CompanyController:index' => ['privates', '.service_locator.kKm6Qt1', 'get_ServiceLocator_KKm6Qt1Service', true],
            'App\\Controller\\DriverController:delete' => ['privates', '.service_locator.FhAR7n9', 'get_ServiceLocator_FhAR7n9Service', true],
            'App\\Controller\\DriverController:edit' => ['privates', '.service_locator.FhAR7n9', 'get_ServiceLocator_FhAR7n9Service', true],
            'App\\Controller\\DriverController:index' => ['privates', '.service_locator.gaI6qSu', 'get_ServiceLocator_GaI6qSuService', true],
            'App\\Controller\\DriverController:insert' => ['privates', '.service_locator.1XBJyM5', 'get_ServiceLocator_1XBJyM5Service', true],
            'App\\Controller\\DriverController:new' => ['privates', '.service_locator.gaI6qSu', 'get_ServiceLocator_GaI6qSuService', true],
            'App\\Controller\\DriverController:photo' => ['privates', '.service_locator.YlxcikI', 'get_ServiceLocator_YlxcikIService', true],
            'App\\Controller\\DriverController:show' => ['privates', '.service_locator.uiEyWlR', 'get_ServiceLocator_UiEyWlRService', true],
            'App\\Controller\\GaleryController:addImage' => ['privates', '.service_locator.Hx0mXiz', 'get_ServiceLocator_Hx0mXizService', true],
            'App\\Controller\\GaleryController:delete' => ['privates', '.service_locator.lO5TKjj', 'get_ServiceLocator_LO5TKjjService', true],
            'App\\Controller\\MailerController:send' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\ProfileController:index' => ['privates', '.service_locator.tgVVt0z', 'get_ServiceLocator_TgVVt0zService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.pHwQa0.', 'get_ServiceLocator_PHwQa0_Service', true],
            'App\\Controller\\SecurityController:forgottenPassword' => ['privates', '.service_locator.VS7mWl.', 'get_ServiceLocator_VS7mWl_Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:resetPass' => ['privates', '.service_locator.kXYwonB', 'get_ServiceLocator_KXYwonBService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\CompanyController::index' => '?',
            'App\\Controller\\DriverController::delete' => '?',
            'App\\Controller\\DriverController::edit' => '?',
            'App\\Controller\\DriverController::index' => '?',
            'App\\Controller\\DriverController::insert' => '?',
            'App\\Controller\\DriverController::new' => '?',
            'App\\Controller\\DriverController::photo' => '?',
            'App\\Controller\\DriverController::show' => '?',
            'App\\Controller\\GaleryController::addImage' => '?',
            'App\\Controller\\GaleryController::delete' => '?',
            'App\\Controller\\MailerController::send' => '?',
            'App\\Controller\\ProfileController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::forgottenPassword' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::resetPass' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CompanyController:index' => '?',
            'App\\Controller\\DriverController:delete' => '?',
            'App\\Controller\\DriverController:edit' => '?',
            'App\\Controller\\DriverController:index' => '?',
            'App\\Controller\\DriverController:insert' => '?',
            'App\\Controller\\DriverController:new' => '?',
            'App\\Controller\\DriverController:photo' => '?',
            'App\\Controller\\DriverController:show' => '?',
            'App\\Controller\\GaleryController:addImage' => '?',
            'App\\Controller\\GaleryController:delete' => '?',
            'App\\Controller\\MailerController:send' => '?',
            'App\\Controller\\ProfileController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:forgottenPassword' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:resetPass' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
