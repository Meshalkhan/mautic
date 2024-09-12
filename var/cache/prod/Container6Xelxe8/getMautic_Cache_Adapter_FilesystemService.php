<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Cache_Adapter_FilesystemService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.cache.adapter.filesystem' shared service.
     *
     * @return \Mautic\CacheBundle\Cache\Adapter\FilesystemTagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.cache.adapter.filesystem'] = new \Mautic\CacheBundle\Cache\Adapter\FilesystemTagAwareAdapter($container->getEnv('nullable:resolve:MAUTIC_CACHE_PREFIX'), $container->getEnv('intNullable:resolve:MAUTIC_CACHE_LIFETIME'), $container->getEnv('nullable:resolve:MAUTIC_TMP_PATH'));
    }
}
