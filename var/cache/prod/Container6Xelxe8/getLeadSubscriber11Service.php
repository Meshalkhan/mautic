<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLeadSubscriber11Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\LeadSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\LeadSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\CoreBundle\\Model\\AuditLogModel'] ?? $container->getAuditLogModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'];
        }
        $b = ($container->services['mautic.lead.event.dispatcher'] ?? $container->load('getMautic_Lead_Event_DispatcherService'));

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'];
        }
        $c = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'];
        }
        $d = ($container->services['Mautic\\CoreBundle\\Factory\\ModelFactory'] ?? $container->getModelFactoryService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\LeadSubscriber'] = new \Mautic\LeadBundle\EventListener\LeadSubscriber(($container->services['mautic.helper.ip_lookup'] ?? $container->getMautic_Helper_IpLookupService()), $a, $b, ($container->services['mautic.helper.twig.dnc_reason'] ?? $container->getMautic_Helper_Twig_DncReasonService()), ($container->services['mautic.permission.manager'] ?? $container->getMautic_Permission_ManagerService()), ($container->services['translator'] ?? $container->getTranslator2Service()), $c, $d, ($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))), ($container->services['Mautic\\LeadBundle\\Entity\\CompanyLeadRepository'] ?? $container->getCompanyLeadRepositoryService()));
    }
}
