<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Form_List_Validator_CircularService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.form.list.validator.circular' shared service.
     *
     * @return \Mautic\CoreBundle\Form\Validator\Constraints\CircularDependencyValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\LeadBundle\\Model\\ListModel'] ?? $container->getListModelService());

        if (isset($container->services['mautic.form.list.validator.circular'])) {
            return $container->services['mautic.form.list.validator.circular'];
        }

        return $container->services['mautic.form.list.validator.circular'] = new \Mautic\CoreBundle\Form\Validator\Constraints\CircularDependencyValidator($a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
