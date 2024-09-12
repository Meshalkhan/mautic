<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateCustomFieldCommandService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Field\Command\UpdateCustomFieldCommand' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Field\Command\UpdateCustomFieldCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\LeadBundle\\Field\\Command\\UpdateCustomFieldCommand'] = new \Mautic\LeadBundle\Field\Command\UpdateCustomFieldCommand(($container->services['mautic.lead.field.settings.background_service'] ?? $container->load('getMautic_Lead_Field_Settings_BackgroundServiceService')), ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
