<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstallCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\InstallBundle\Command\InstallCommand' shared autowired service.
     *
     * @return \Mautic\InstallBundle\Command\InstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\InstallBundle\\Command\\InstallCommand'] = new \Mautic\InstallBundle\Command\InstallCommand(($container->services['mautic.install.service'] ?? $container->getMautic_Install_ServiceService()), ($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
