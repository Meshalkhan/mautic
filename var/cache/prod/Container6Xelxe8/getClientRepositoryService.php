<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ApiBundle\Entity\oAuth2\ClientRepository' shared autowired service.
     *
     * @return \Mautic\ApiBundle\Entity\oAuth2\ClientRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\ApiBundle\\Entity\\oAuth2\\ClientRepository'] = new \Mautic\ApiBundle\Entity\oAuth2\ClientRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
