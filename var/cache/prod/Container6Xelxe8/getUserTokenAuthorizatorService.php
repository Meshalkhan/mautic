<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTokenAuthorizatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\UserBundle\Enum\UserTokenAuthorizator' shared autowired service.
     *
     * @return \Mautic\UserBundle\Enum\UserTokenAuthorizator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\UserBundle\\Enum\\UserTokenAuthorizator'] = new \Mautic\UserBundle\Enum\UserTokenAuthorizator();
    }
}
