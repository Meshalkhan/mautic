<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMautic_MenuRenderer_MainService extends AppKernelProdContainer
{
    /*
     * Gets the private 'mautic.menu_renderer.main' shared service.
     *
     * @return \Mautic\CoreBundle\Menu\MenuRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['mautic.menu_renderer.main'])) {
            return $container->privates['mautic.menu_renderer.main'];
        }

        return $container->privates['mautic.menu_renderer.main'] = new \Mautic\CoreBundle\Menu\MenuRenderer(($container->services['knp_menu.matcher'] ?? $container->getKnpMenu_MatcherService()), $a, []);
    }
}
