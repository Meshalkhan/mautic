<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFieldTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\FieldType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\FieldType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\FieldType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\FieldType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\FieldType'] = new \Mautic\LeadBundle\Form\Type\FieldType($a, ($container->services['Mautic\\CoreBundle\\Translation\\Translator'] ?? $container->getTranslatorService()), ($container->services['mautic.lead.field.identifier_fields'] ?? $container->load('getMautic_Lead_Field_IdentifierFieldsService')), ($container->services['Mautic\\LeadBundle\\Field\\Helper\\IndexHelper'] ?? $container->load('getIndexHelperService')));
    }
}
