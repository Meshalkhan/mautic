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

/* @bundles/SmsBundle/MauticSmsBundle.php */
class __TwigTemplate_ac9238a1c40abcba69f041fa0ec75803 extends Template
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

namespace Mautic\\SmsBundle;

use Mautic\\PluginBundle\\Bundle\\PluginBundleBase;
use Mautic\\SmsBundle\\DependencyInjection\\Compiler\\SmsTransportPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class MauticSmsBundle extends PluginBundleBase
{
    public function build(ContainerBuilder \$container): void
    {
        \$container->addCompilerPass(new SmsTransportPass(), \\Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig::TYPE_BEFORE_OPTIMIZATION, 0);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/MauticSmsBundle.php";
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
        return new Source("", "@bundles/SmsBundle/MauticSmsBundle.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\MauticSmsBundle.php");
    }
}
