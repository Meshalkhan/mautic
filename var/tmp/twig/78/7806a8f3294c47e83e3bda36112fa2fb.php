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

/* @bundles/FormBundle/Config/services.php */
class __TwigTemplate_efbff55dc1cc42d672eaf4676102e552 extends Template
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
        'ProgressiveProfiling/DisplayCounter.php',
        'ProgressiveProfiling/DisplayManager.php',
    ];

    \$services->load('Mautic\\\\FormBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\FormBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);

    \$services->alias('mautic.form.model.action', Mautic\\FormBundle\\Model\\ActionModel::class);
    \$services->alias('mautic.form.model.field', Mautic\\FormBundle\\Model\\FieldModel::class);
    \$services->alias('mautic.form.model.form', Mautic\\FormBundle\\Model\\FormModel::class);
    \$services->alias('mautic.form.model.submission', Mautic\\FormBundle\\Model\\SubmissionModel::class);
    \$services->alias('mautic.form.model.submission_result_loader', Mautic\\FormBundle\\Model\\SubmissionResultLoader::class);
    \$services->alias('mautic.form.repository.form', Mautic\\FormBundle\\Entity\\FormRepository::class);
    \$services->alias('mautic.form.repository.submission', Mautic\\FormBundle\\Entity\\SubmissionRepository::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Config/services.php";
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
        return new Source("", "@bundles/FormBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Config\\services.php");
    }
}
