<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessReplySubscriberService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\EventListener\ProcessReplySubscriber' shared autowired service.
     *
     * @return \Mautic\EmailBundle\EventListener\ProcessReplySubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply'] ?? $container->load('getReplyService'));

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\ProcessReplySubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\ProcessReplySubscriber'];
        }
        $b = ($container->services['mautic.helper.cache_storage'] ?? $container->getMautic_Helper_CacheStorageService());

        if (isset($container->services['Mautic\\EmailBundle\\EventListener\\ProcessReplySubscriber'])) {
            return $container->services['Mautic\\EmailBundle\\EventListener\\ProcessReplySubscriber'];
        }

        return $container->services['Mautic\\EmailBundle\\EventListener\\ProcessReplySubscriber'] = new \Mautic\EmailBundle\EventListener\ProcessReplySubscriber($a, $b);
    }
}
