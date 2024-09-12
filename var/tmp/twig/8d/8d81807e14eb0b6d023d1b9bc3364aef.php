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

/* @bundles/ApiBundle/MauticApiBundle.php */
class __TwigTemplate_6c595b381520677dea87407816e9f962 extends Template
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

namespace Mautic\\ApiBundle;

use Mautic\\ApiBundle\\DependencyInjection\\Compiler\\SerializerPass;
use Mautic\\ApiBundle\\DependencyInjection\\Factory\\ApiFactory;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticApiBundle extends Bundle
{
    public function build(ContainerBuilder \$container): void
    {
        parent::build(\$container);

        \$container->addCompilerPass(new SerializerPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);

        \$extension = \$container->getExtension('security');
        \$extension->addSecurityListenerFactory(new ApiFactory());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/MauticApiBundle.php";
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
        return new Source("", "@bundles/ApiBundle/MauticApiBundle.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\MauticApiBundle.php");
    }
}
