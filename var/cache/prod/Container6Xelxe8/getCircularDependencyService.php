<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCircularDependencyService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\Validator\Constraints\CircularDependency' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\Validator\Constraints\CircularDependency
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\Validator\\Constraints\\CircularDependency'] = new \Mautic\CoreBundle\Form\Validator\Constraints\CircularDependency();
    }
}
