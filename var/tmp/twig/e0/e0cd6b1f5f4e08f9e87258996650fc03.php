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

/* @bundles/IntegrationsBundle/Config/services.php */
class __TwigTemplate_358339040867e561dd50f67101856a2a extends Template
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
        'Helper/FieldFilterHelper.php',
        'Helper/FieldMergerHelper.php',
        'Auth/Support/Oauth2/Token',
        'Sync/DAO',
        'Sync/Exception',
        'Sync/SyncDataExchange/Internal/Executioner/Exception',
        'Sync/SyncProcess/SyncProcess.php',
        'Integration/IntegrationObject.php',
    ];

    \$services->load('Mautic\\\\IntegrationsBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\IntegrationsBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);

    \$services->alias('mautic.integrations.repository.field_change', Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository::class);
    \$services->alias('mautic.integrations.repository.object_mapping', Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository::class);
    \$services->alias('mautic.plugin.integrations.repository.integration', Mautic\\PluginBundle\\Entity\\IntegrationRepository::class);
    \$services->alias('mautic.integrations.helper.contact_object', Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\ContactObjectHelper::class);
    \$services->alias('mautic.integrations.helper.company_object', Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper\\CompanyObjectHelper::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Config/services.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Config\\services.php");
    }
}
