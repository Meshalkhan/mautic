<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigType11Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ReportBundle\Form\Type\ConfigType' shared autowired service.
     *
     * @return \Mautic\ReportBundle\Form\Type\ConfigType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ReportBundle\\Form\\Type\\ConfigType'] = new \Mautic\ReportBundle\Form\Type\ConfigType();
    }
}
