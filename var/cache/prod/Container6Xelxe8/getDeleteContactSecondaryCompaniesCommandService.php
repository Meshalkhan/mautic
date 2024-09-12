<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteContactSecondaryCompaniesCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Command\DeleteContactSecondaryCompaniesCommand' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Command\DeleteContactSecondaryCompaniesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Command\\DeleteContactSecondaryCompaniesCommand'] = new \Mautic\LeadBundle\Command\DeleteContactSecondaryCompaniesCommand(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['Mautic\\LeadBundle\\Entity\\CompanyLeadRepository'] ?? $container->getCompanyLeadRepositoryService()));
    }
}
