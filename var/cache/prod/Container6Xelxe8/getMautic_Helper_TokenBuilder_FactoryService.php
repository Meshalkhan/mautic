<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Helper_TokenBuilder_FactoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.helper.token_builder.factory' shared service.
     *
     * @return \Mautic\CoreBundle\Helper\BuilderTokenHelperFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService());

        if (isset($container->services['mautic.helper.token_builder.factory'])) {
            return $container->services['mautic.helper.token_builder.factory'];
        }
        $b = ($container->services['doctrine.dbal.default_connection'] ?? $container->getDoctrine_Dbal_DefaultConnectionService());

        if (isset($container->services['mautic.helper.token_builder.factory'])) {
            return $container->services['mautic.helper.token_builder.factory'];
        }

        return $container->services['mautic.helper.token_builder.factory'] = new \Mautic\CoreBundle\Helper\BuilderTokenHelperFactory(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $a, $b, ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
    }
}
