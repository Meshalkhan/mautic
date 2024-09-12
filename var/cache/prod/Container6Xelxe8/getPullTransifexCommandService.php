<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPullTransifexCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Command\PullTransifexCommand' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Command\PullTransifexCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Command\\PullTransifexCommand'] = new \Mautic\CoreBundle\Command\PullTransifexCommand(($container->services['Mautic\\CoreBundle\\Factory\\TransifexFactory'] ?? $container->load('getTransifexFactoryService')), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.paths'] ?? $container->getMautic_Helper_PathsService()), ($container->services['Mautic\\CoreBundle\\Helper\\LanguageHelper'] ?? $container->load('getLanguageHelperService')));
    }
}
