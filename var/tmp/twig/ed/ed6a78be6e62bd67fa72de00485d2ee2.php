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

/* @bundles/PointBundle/Config/services.php */
class __TwigTemplate_2eaff91e95cef41106f7833d26bd0101 extends Template
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
    ];

    \$services->load('Mautic\\\\PointBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\PointBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);

    \$services->alias('mautic.point.model.point', Mautic\\PointBundle\\Model\\PointModel::class);
    \$services->alias('mautic.point.model.triggerevent', Mautic\\PointBundle\\Model\\TriggerEventModel::class);
    \$services->alias('mautic.point.model.trigger', Mautic\\PointBundle\\Model\\TriggerModel::class);
    \$services->alias('mautic.point.model.group', Mautic\\PointBundle\\Model\\PointGroupModel::class);
    \$services->alias('mautic.point.repository.lead_point_log', Mautic\\PointBundle\\Entity\\LeadPointLogRepository::class);
    \$services->alias('mautic.point.repository.lead_trigger_log', Mautic\\PointBundle\\Entity\\LeadTriggerLogRepository::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Config/services.php";
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
        return new Source("", "@bundles/PointBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Config\\services.php");
    }
}
