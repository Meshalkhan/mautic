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

/* @bundles/CoreBundle/MauticCoreBundle.php */
class __TwigTemplate_3190d46ee8a5f5dda1a30f0e84851100 extends Template
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

namespace Mautic\\CoreBundle;

use Mautic\\CoreBundle\\DependencyInjection\\Compiler;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticCoreBundle extends Bundle
{
    public function build(ContainerBuilder \$container): void
    {
        \$container->addCompilerPass(new Compiler\\RequirementsPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\ConfiguratorPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\DbalPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\TwigPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\TranslationsPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, -100);
        \$container->addCompilerPass(new Compiler\\TranslationLoaderPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 100);
        \$container->addCompilerPass(new Compiler\\ModelPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\UpdateStepPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\PermissionsPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\PreUpdateCheckPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\ServicePass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 1000);
        \$container->addCompilerPass(new Compiler\\ShortenerServicePass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        \$container->addCompilerPass(new Compiler\\ORMPurgerPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, -10);
        \$container->addCompilerPass(new Compiler\\SystemThemeTemplatePathPass(), PassConfig::TYPE_BEFORE_REMOVING, 0);

        if ('test' === \$container->getParameter('kernel.environment')) {
            \$container->addCompilerPass(new Compiler\\TestPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/MauticCoreBundle.php";
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
        return new Source("", "@bundles/CoreBundle/MauticCoreBundle.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\MauticCoreBundle.php");
    }
}
