<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDsnTransformerFactoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ConfigBundle\Form\DataTransformer\DsnTransformerFactory' shared autowired service.
     *
     * @return \Mautic\ConfigBundle\Form\DataTransformer\DsnTransformerFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ConfigBundle\\Form\\DataTransformer\\DsnTransformerFactory'] = new \Mautic\ConfigBundle\Form\DataTransformer\DsnTransformerFactory(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer'] ?? ($container->services['Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer'] = new \Mautic\ConfigBundle\Form\Type\EscapeTransformer($container->getEnv('json:resolve:MAUTIC_CONFIG_ALLOWED_PARAMETERS')))));
    }
}
