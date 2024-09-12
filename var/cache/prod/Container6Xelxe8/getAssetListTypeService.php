<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetListTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\Form\Type\AssetListType' shared autowired service.
     *
     * @return \Mautic\AssetBundle\Form\Type\AssetListType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\AssetBundle\\Model\\AssetModel'] ?? $container->getAssetModelService());

        if (isset($container->services['Mautic\\AssetBundle\\Form\\Type\\AssetListType'])) {
            return $container->services['Mautic\\AssetBundle\\Form\\Type\\AssetListType'];
        }

        return $container->services['Mautic\\AssetBundle\\Form\\Type\\AssetListType'] = new \Mautic\AssetBundle\Form\Type\AssetListType(($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $a, ($container->services['mautic.helper.user'] ?? $container->getMautic_Helper_UserService()));
    }
}
