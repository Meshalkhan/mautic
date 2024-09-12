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

/* @bundles/IntegrationsBundle/IntegrationsBundle.php */
class __TwigTemplate_ac4262141a3f055a9f300c0d0ea39df3 extends Template
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

namespace Mautic\\IntegrationsBundle;

use Mautic\\IntegrationsBundle\\Bundle\\AbstractPluginBundle;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\AuthenticationIntegrationPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\BuilderIntegrationPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\ConfigIntegrationPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\IntegrationsPass;
use Mautic\\IntegrationsBundle\\DependencyInjection\\Compiler\\SyncIntegrationsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class IntegrationsBundle extends AbstractPluginBundle
{
    public function build(ContainerBuilder \$container): void
    {
        \$container->addCompilerPass(new IntegrationsPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new AuthenticationIntegrationPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new SyncIntegrationsPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new ConfigIntegrationPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new BuilderIntegrationPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/IntegrationsBundle.php";
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
        return new Source("", "@bundles/IntegrationsBundle/IntegrationsBundle.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\IntegrationsBundle.php");
    }
}
