<?php

namespace ContainerO3mOSSL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CacheClearService extends FitnessApi_App_AppKernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/filesystem/Filesystem.php';

        $container->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['cache.system_clearer'] ?? $container->load('getCache_SystemClearerService'));
        }, 1)), ($container->privates['filesystem'] ?? ($container->privates['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');
        $instance->setDescription('Clear the cache');

        return $instance;
    }
}
