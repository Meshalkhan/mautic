<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonitorTwitterHashtagsCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\MauticSocialBundle\Command\MonitorTwitterHashtagsCommand' shared autowired service.
     *
     * @return \MauticPlugin\MauticSocialBundle\Command\MonitorTwitterHashtagsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\MauticSocialBundle\\Command\\MonitorTwitterHashtagsCommand'] = new \MauticPlugin\MauticSocialBundle\Command\MonitorTwitterHashtagsCommand(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.helper.integration'] ?? $container->getMautic_Helper_IntegrationService()), ($container->services['mautic.social.helper.twitter_command'] ?? $container->load('getMautic_Social_Helper_TwitterCommandService')), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
