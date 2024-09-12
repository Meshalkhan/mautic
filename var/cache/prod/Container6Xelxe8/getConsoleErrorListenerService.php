<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsoleErrorListenerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\ConsoleErrorListener' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\ConsoleErrorListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\EventListener\\ConsoleErrorListener'] = new \Mautic\CoreBundle\EventListener\ConsoleErrorListener(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
