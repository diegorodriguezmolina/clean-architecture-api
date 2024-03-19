<?php

namespace ContainerO3mOSSL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NativeService extends FitnessApi_App_AppKernelDevDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory.native' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NativeTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/mailer/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/mailer/Transport/AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/mailer/Transport/NativeTransportFactory.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['mailer.transport_factory.native'])) {
            return $container->privates['mailer.transport_factory.native'];
        }

        return $container->privates['mailer.transport_factory.native'] = new \Symfony\Component\Mailer\Transport\NativeTransportFactory($a, ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}