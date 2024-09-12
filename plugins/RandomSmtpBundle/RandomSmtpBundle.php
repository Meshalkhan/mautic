<?php

namespace MauticPlugin\RandomSmtpBundle;

use Mautic\CoreBundle\Factory\MauticFactory;
use Mautic\PluginBundle\Bundle\PluginBundleBase;
use Mautic\PluginBundle\Entity\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class RandomSmtpBundle extends PluginBundleBase
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        // Load services from the services.yml file
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/Resources/config'));
        $loader->load('services.yml');
    }

    public static function onPluginInstall(
        Plugin $plugin,
        MauticFactory $factory,
        $metadata = null,
        $installedSchema = null
    ): void {
        // Call parent to handle the default installation behavior
        parent::onPluginInstall($plugin, $factory, $metadata, $installedSchema);

        // Add any custom install logic if needed
    }
}
