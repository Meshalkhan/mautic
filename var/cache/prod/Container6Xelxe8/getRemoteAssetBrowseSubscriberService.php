<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoteAssetBrowseSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticCloudStorageBundle\EventListener\RemoteAssetBrowseSubscriber' shared autowired service.
     *
     * @return \MauticPlugin\MauticCloudStorageBundle\EventListener\RemoteAssetBrowseSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticCloudStorageBundle\\EventListener\\RemoteAssetBrowseSubscriber'] = new \MauticPlugin\MauticCloudStorageBundle\EventListener\RemoteAssetBrowseSubscriber();
    }
}
