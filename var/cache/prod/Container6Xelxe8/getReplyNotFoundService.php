<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReplyNotFoundService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\EmailBundle\MonitoredEmail\Exception\ReplyNotFound' shared autowired service.
     *
     * @return \Mautic\EmailBundle\MonitoredEmail\Exception\ReplyNotFound
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\EmailBundle\\MonitoredEmail\\Exception\\ReplyNotFound'] = new \Mautic\EmailBundle\MonitoredEmail\Exception\ReplyNotFound();
    }
}
