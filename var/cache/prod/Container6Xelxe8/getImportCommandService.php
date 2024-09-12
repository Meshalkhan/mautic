<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Command\ImportCommand' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Command\ImportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Command\\ImportCommand'] = new \Mautic\LeadBundle\Command\ImportCommand(($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['Mautic\\LeadBundle\\Model\\ImportModel'] ?? $container->load('getImportModelService')), ($container->services['Mautic\\CoreBundle\\ProcessSignal\\ProcessSignalService'] ?? ($container->services['Mautic\\CoreBundle\\ProcessSignal\\ProcessSignalService'] = new \Mautic\CoreBundle\ProcessSignal\ProcessSignalService())), ($container->services['mautic.security.user_token_setter'] ?? $container->load('getMautic_Security_UserTokenSetterService')));
    }
}
