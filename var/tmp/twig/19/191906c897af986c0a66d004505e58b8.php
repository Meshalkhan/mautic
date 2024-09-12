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

/* @bundles/PageBundle/Config/services.php */
class __TwigTemplate_2b0ed6b4a2440d0eb0092cdeb398948c extends Template
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

    \$services->load('Mautic\\\\PageBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\PageBundle\\\\Entity\\\\', '../Entity/*Repository.php')
        ->tag(Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler\\ServiceRepositoryCompilerPass::REPOSITORY_SERVICE_TAG);

    \$services->get(Mautic\\PageBundle\\Model\\PageModel::class)->call('setCatInUrl', ['%mautic.cat_in_page_url%']);
    \$services->alias('mautic.page.model.page', Mautic\\PageBundle\\Model\\PageModel::class);
    \$services->alias('mautic.page.model.redirect', Mautic\\PageBundle\\Model\\RedirectModel::class);
    \$services->alias('mautic.page.model.trackable', Mautic\\PageBundle\\Model\\TrackableModel::class);
    \$services->alias('mautic.page.model.video', Mautic\\PageBundle\\Model\\VideoModel::class);
    \$services->alias('mautic.page.model.tracking.404', Mautic\\PageBundle\\Model\\Tracking404Model::class);
    \$services->alias('mautic.page.repository.hit', Mautic\\PageBundle\\Entity\\HitRepository::class);
    \$services->alias('mautic.page.repository.page', Mautic\\PageBundle\\Entity\\PageRepository::class);
    \$services->alias('mautic.page.repository.redirect', Mautic\\PageBundle\\Entity\\RedirectRepository::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Config/services.php";
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
        return new Source("", "@bundles/PageBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Config\\services.php");
    }
}
