<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailStatOptionsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Stats\FetchOptions\EmailStatOptions' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Stats\FetchOptions\EmailStatOptions
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions'] = new \Mautic\EmailBundle\Stats\FetchOptions\EmailStatOptions();
    }
}
