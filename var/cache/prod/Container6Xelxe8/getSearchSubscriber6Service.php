<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchSubscriber6Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\SearchSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\SearchSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\LeadModel'] ?? $container->getLeadModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\SearchSubscriber'];
        }
        $b = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\SearchSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\SearchSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\SearchSubscriber'] = new \Mautic\LeadBundle\EventListener\SearchSubscriber($a, ($container->services['Mautic\\EmailBundle\\Entity\\EmailRepository'] ?? $container->load('getEmailRepositoryService')), ($container->services['translator'] ?? $container->getTranslator2Service()), ($container->services['mautic.security'] ?? $container->getMautic_SecurityService()), $b);
    }
}
