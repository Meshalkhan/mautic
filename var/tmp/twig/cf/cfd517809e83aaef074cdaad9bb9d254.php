<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/PluginBundle/Config/services.php */
class __TwigTemplate_7e3d3c3773e221eec378a0172c0eaa77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

declare(strict_types=1);

use Mautic\\CoreBundle\\DependencyInjection\\MauticCoreExtension;
use Mautic\\PluginBundle\\EventListener\\CampaignSubscriber;
use Mautic\\PluginBundle\\EventListener\\FormSubscriber;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

use function Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\service;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Helper/oAuthHelper.php',
        'Integration/IntegrationObject.php',
    ];

    \$services->load('Mautic\\\\PluginBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\PluginBundle\\\\Entity\\\\', '../Entity/*Repository.php');

    \$services->alias('mautic.plugin.model.plugin', Mautic\\PluginBundle\\Model\\PluginModel::class);
    \$services->alias('mautic.plugin.model.integration_entity', Mautic\\PluginBundle\\Model\\IntegrationEntityModel::class);

    \$services->set(FormSubscriber::class)
        ->call('setIntegrationHelper', [service('mautic.helper.integration')]);
    \$services->set(CampaignSubscriber::class)
        ->call('setIntegrationHelper', [service('mautic.helper.integration')]);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Config/services.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/PluginBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Config\\services.php");
    }
}
