<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRandomSmtpBundleService extends AppKernelProdContainer
{
    /*
     * Gets the public 'MauticPlugin\RandomSmtpBundle\RandomSmtpBundle' shared autowired service.
     *
     * @return \MauticPlugin\RandomSmtpBundle\RandomSmtpBundle
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['MauticPlugin\\RandomSmtpBundle\\RandomSmtpBundle'] = new \MauticPlugin\RandomSmtpBundle\RandomSmtpBundle();
    }
}
