<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigEnvVarsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Loader\EnvVars\ConfigEnvVars' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Loader\EnvVars\ConfigEnvVars
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Loader\\EnvVars\\ConfigEnvVars'] = new \Mautic\CoreBundle\Loader\EnvVars\ConfigEnvVars();
    }
}
