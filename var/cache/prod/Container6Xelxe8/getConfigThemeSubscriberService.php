<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigThemeSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\EventListener\ConfigThemeSubscriber' shared autowired service.
     *
     * @return \Mautic\CoreBundle\EventListener\ConfigThemeSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\EventListener\\ConfigThemeSubscriber'] = new \Mautic\CoreBundle\EventListener\ConfigThemeSubscriber();
    }
}
