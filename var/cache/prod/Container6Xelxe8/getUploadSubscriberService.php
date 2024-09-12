<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploadSubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\AssetBundle\EventListener\UploadSubscriber' shared autowired service.
     *
     * @return \Mautic\AssetBundle\EventListener\UploadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\AssetBundle\\Model\\AssetModel'] ?? $container->getAssetModelService());

        if (isset($container->services['Mautic\\AssetBundle\\EventListener\\UploadSubscriber'])) {
            return $container->services['Mautic\\AssetBundle\\EventListener\\UploadSubscriber'];
        }

        return $container->services['Mautic\\AssetBundle\\EventListener\\UploadSubscriber'] = new \Mautic\AssetBundle\EventListener\UploadSubscriber(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), $a, ($container->services['mautic.core.validator.file_upload'] ?? $container->getMautic_Core_Validator_FileUploadService()));
    }
}
