<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeneratedColumnSubscriber2Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\EventListener\GeneratedColumnSubscriber' shared autowired service.
     *
     * @return \Mautic\LeadBundle\EventListener\GeneratedColumnSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['Mautic\\LeadBundle\\EventListener\\GeneratedColumnSubscriber'])) {
            return $container->services['Mautic\\LeadBundle\\EventListener\\GeneratedColumnSubscriber'];
        }

        return $container->services['Mautic\\LeadBundle\\EventListener\\GeneratedColumnSubscriber'] = new \Mautic\LeadBundle\EventListener\GeneratedColumnSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
