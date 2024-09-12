<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailMapStatsControllerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Controller\EmailMapStatsController' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Controller\EmailMapStatsController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Mautic\\EmailBundle\\Controller\\EmailMapStatsController'] = $instance = new \Mautic\EmailBundle\Controller\EmailMapStatsController(($container->services['Mautic\\EmailBundle\\Model\\EmailModel'] ?? $container->getEmailModelService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->get_ServiceLocator_Mx0UMmYService())->withContext('Mautic\\EmailBundle\\Controller\\EmailMapStatsController', $container));

        return $instance;
    }
}
