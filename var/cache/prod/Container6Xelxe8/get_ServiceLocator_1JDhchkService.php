<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1JDhchkService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.1JDhchk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1JDhchk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pathsHelper' => ['services', 'mautic.helper.paths', 'getMautic_Helper_PathsService', false],
        ], [
            'pathsHelper' => '?',
        ]);
    }
}
