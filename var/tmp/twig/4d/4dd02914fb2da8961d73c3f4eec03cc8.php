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

/* @bundles/EmailBundle/MauticEmailBundle.php */
class __TwigTemplate_06b930c22d8b19faf675d8af8f81c308 extends Template
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

namespace Mautic\\EmailBundle;

use Mautic\\EmailBundle\\DependencyInjection\\Compiler\\StatHelperPass;
use Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticEmailBundle extends Bundle
{
    public function build(ContainerBuilder \$container): void
    {
        \$container->addCompilerPass(new StatHelperPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MauticEmailBundle.php";
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
        return new Source("", "@bundles/EmailBundle/MauticEmailBundle.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MauticEmailBundle.php");
    }
}
