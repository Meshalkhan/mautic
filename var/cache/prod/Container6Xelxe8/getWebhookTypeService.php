<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebhookTypeService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\WebhookBundle\Form\Type\WebhookType' shared autowired service.
     *
     * @return \Mautic\WebhookBundle\Form\Type\WebhookType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\WebhookBundle\\Form\\Type\\WebhookType'] = new \Mautic\WebhookBundle\Form\Type\WebhookType();
    }
}
