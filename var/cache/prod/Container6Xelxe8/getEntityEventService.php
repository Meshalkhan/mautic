<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityEventService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Validator\EntityEvent' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Validator\EntityEvent
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Validator\\EntityEvent'] = new \Mautic\CoreBundle\Validator\EntityEvent();
    }
}
