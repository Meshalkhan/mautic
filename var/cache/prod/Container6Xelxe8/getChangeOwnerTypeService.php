<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangeOwnerTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\LeadBundle\Form\Type\ChangeOwnerType' shared autowired service.
     *
     * @return \Mautic\LeadBundle\Form\Type\ChangeOwnerType
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\UserBundle\\Model\\UserModel'] ?? $container->getUserModelService());

        if (isset($container->services['Mautic\\LeadBundle\\Form\\Type\\ChangeOwnerType'])) {
            return $container->services['Mautic\\LeadBundle\\Form\\Type\\ChangeOwnerType'];
        }

        return $container->services['Mautic\\LeadBundle\\Form\\Type\\ChangeOwnerType'] = new \Mautic\LeadBundle\Form\Type\ChangeOwnerType($a);
    }
}
