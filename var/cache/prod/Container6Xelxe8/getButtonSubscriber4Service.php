<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getButtonSubscriber4Service extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\ChannelBundle\EventListener\ButtonSubscriber' shared autowired service.
     *
     * @return \Mautic\ChannelBundle\EventListener\ButtonSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->services['Mautic\\ChannelBundle\\EventListener\\ButtonSubscriber'])) {
            return $container->services['Mautic\\ChannelBundle\\EventListener\\ButtonSubscriber'];
        }

        return $container->services['Mautic\\ChannelBundle\\EventListener\\ButtonSubscriber'] = new \Mautic\ChannelBundle\EventListener\ButtonSubscriber($a, ($container->services['translator'] ?? $container->getTranslator2Service()));
    }
}
