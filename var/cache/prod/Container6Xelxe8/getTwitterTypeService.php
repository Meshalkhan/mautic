<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwitterTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Form\Type\TwitterType' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Form\Type\TwitterType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Form\\Type\\TwitterType'] = new \MauticPlugin\MauticSocialBundle\Form\Type\TwitterType();
    }
}
