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

/* @bundles/WebhookBundle/Config/services.php */
class __TwigTemplate_e17b9d2e9360f0248293f8b0ab68c924 extends Template
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
        'Form/DataTransformer/EventsToArrayTransformer.php',
    ];

    \$services->load('Mautic\\\\WebhookBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\WebhookBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);

    \$services->alias('mautic.webhook.model.webhook', Mautic\\WebhookBundle\\Model\\WebhookModel::class);
    \$services->alias('mautic.webhook.repository.queue', Mautic\\WebhookBundle\\Entity\\WebhookQueueRepository::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Config/services.php";
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
        return new Source("", "@bundles/WebhookBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Config\\services.php");
    }
}
