<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPointEventHelperService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\Helper\PointEventHelper' shared autowired service.
     *
     * @return \Mautic\EmailBundle\Helper\PointEventHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\Helper\\PointEventHelper'] = new \Mautic\EmailBundle\Helper\PointEventHelper();
    }
}
