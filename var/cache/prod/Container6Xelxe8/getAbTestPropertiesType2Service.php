<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAbTestPropertiesType2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Form\Type\AbTestPropertiesType' shared autowired service.
     *
     * @return \Mautic\PageBundle\Form\Type\AbTestPropertiesType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\Form\\Type\\AbTestPropertiesType'] = new \Mautic\PageBundle\Form\Type\AbTestPropertiesType();
    }
}
