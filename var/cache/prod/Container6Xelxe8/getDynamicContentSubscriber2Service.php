<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDynamicContentSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\DynamicContentSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\DynamicContentSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\EventListener\\DynamicContentSubscriber'] = new \Mautic\LeadBundle\EventListener\DynamicContentSubscriber(($container->services['Mautic\\LeadBundle\\Entity\\LeadListRepository'] ?? $container->load('getLeadListRepositoryService')));
    }
}
