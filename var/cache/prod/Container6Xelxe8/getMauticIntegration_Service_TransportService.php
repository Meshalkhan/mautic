<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMauticIntegration_Service_TransportService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic_integration.service.transport' shared service.
     *
     * @return \MauticPlugin\MauticCrmBundle\Services\Transport
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic_integration.service.transport'] = new \MauticPlugin\MauticCrmBundle\Services\Transport(($container->services['mautic.http.client'] ?? ($container->services['mautic.http.client'] = new \GuzzleHttp\Client())));
    }
}
