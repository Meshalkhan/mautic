<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\EventListener\EmailSubscriber' shared autowired service.
     *
     * @return \Mautic\AssetBundle\EventListener\EmailSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\AssetBundle\\EventListener\\EmailSubscriber'] = new \Mautic\AssetBundle\EventListener\EmailSubscriber();
    }
}
