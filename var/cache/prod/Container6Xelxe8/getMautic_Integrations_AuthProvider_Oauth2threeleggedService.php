<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Integrations_AuthProvider_Oauth2threeleggedService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.integrations.auth_provider.oauth2threelegged' shared service.
     *
     * @return \Mautic\IntegrationsBundle\Auth\Provider\Oauth2ThreeLegged\HttpFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.integrations.auth_provider.oauth2threelegged'] = new \Mautic\IntegrationsBundle\Auth\Provider\Oauth2ThreeLegged\HttpFactory();
    }
}
