<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHitRepositoryService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\PageBundle\Entity\HitRepository' shared autowired service.
     *
     * @return \Mautic\PageBundle\Entity\HitRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\PageBundle\\Entity\\HitRepository'] = new \Mautic\PageBundle\Entity\HitRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
