<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_Form_Validator_Constraint_FileExtensionConstraintValidatorService extends AppKernelProdContainer
{
    /*
     * Gets the public 'mautic.form.validator.constraint.file_extension_constraint_validator' shared service.
     *
     * @return \Mautic\FormBundle\Validator\Constraint\FileExtensionConstraintValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['mautic.form.validator.constraint.file_extension_constraint_validator'] = new \Mautic\FormBundle\Validator\Constraint\FileExtensionConstraintValidator(($container->services['mautic.helper.core_parameters'] ?? ($container->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($container))));
    }
}
