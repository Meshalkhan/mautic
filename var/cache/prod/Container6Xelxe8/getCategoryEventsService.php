<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryEventsService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CategoryBundle\CategoryEvents' shared autowired service.
     *
     * @return \Mautic\CategoryBundle\CategoryEvents
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CategoryBundle\\CategoryEvents'] = new \Mautic\CategoryBundle\CategoryEvents();
    }
}
