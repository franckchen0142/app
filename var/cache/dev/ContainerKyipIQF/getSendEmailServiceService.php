<?php

namespace ContainerKyipIQF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendEmailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\SendEmailService' shared autowired service.
     *
     * @return \App\Service\SendEmailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/SendEmailService.php';

        return $container->privates['App\\Service\\SendEmailService'] = new \App\Service\SendEmailService(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));
    }
}
