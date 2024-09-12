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

/* @bundles/ChannelBundle/Config/services.php */
class __TwigTemplate_e61254d3263c6cda2bfb4a18686842c4 extends Template
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
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'PreferenceBuilder/ChannelPreferences.php',
        'PreferenceBuilder/PreferenceBuilder.php',
    ];

    \$services->load('Mautic\\\\ChannelBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\ChannelBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);
    \$services->alias('mautic.channel.model.message', Mautic\\ChannelBundle\\Model\\MessageModel::class);
    \$services->alias('mautic.channel.model.queue', Mautic\\ChannelBundle\\Model\\MessageQueueModel::class);
    \$services->alias('mautic.channel.model.channel.action', Mautic\\ChannelBundle\\Model\\ChannelActionModel::class);
    \$services->alias('mautic.channel.model.frequency.action', Mautic\\ChannelBundle\\Model\\FrequencyActionModel::class);
    \$services->alias('mautic.channel.repository.message_queue', Mautic\\ChannelBundle\\Entity\\MessageQueueRepository::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Config/services.php";
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
        return new Source("", "@bundles/ChannelBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Config\\services.php");
    }
}
