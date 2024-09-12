<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XhZ67eTService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.xhZ67eT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xhZ67eT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactRequestHelper' => ['services', 'mautic.lead.helper.contact_request_helper', 'getMautic_Lead_Helper_ContactRequestHelperService', false],
            'ipLookupHelper' => ['services', 'mautic.helper.ip_lookup', 'getMautic_Helper_IpLookupService', false],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
            'primaryCompanyHelper' => ['services', 'mautic.lead.helper.primary_company', 'getMautic_Lead_Helper_PrimaryCompanyService', false],
        ], [
            'contactRequestHelper' => '?',
            'ipLookupHelper' => '?',
            'logger' => '?',
            'primaryCompanyHelper' => '?',
        ]);
    }
}
