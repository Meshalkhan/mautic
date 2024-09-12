<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GZEvAgNService extends AppKernelProdContainer
{
    /*
     * Gets the private '.service_locator.GZEvAgN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GZEvAgN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactColumnsDictionary' => ['services', 'mautic.lead.columns.dictionary', 'getMautic_Lead_Columns_DictionaryService', true],
        ], [
            'contactColumnsDictionary' => '?',
        ]);
    }
}
