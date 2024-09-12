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

/* @bundles/CoreBundle/DependencyInjection/Compiler/RequirementsPass.php */
class __TwigTemplate_c7193e8f235bdc2df741a38354b03c22 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Mautic\\CoreBundle\\Exception\\MessageOnlyErrorHandlerException;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class RequirementsPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        if (defined('MAUTIC_INSTALLER')) {
            // The installer itself does the PDO check, so no need to validate here during installation.
            return;
        }

        if (!class_exists('PDO') || !in_array('mysql', \\PDO::getAvailableDrivers(), true)) {
            // We need to check this on boot, as later in the process is too late to show a message that makes the issue clear.
            throw new MessageOnlyErrorHandlerException('Mautic requires the PHP pdo_mysql extension to work. Please ensure this extension is installed and enabled');
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
        return "@bundles/CoreBundle/DependencyInjection/Compiler/RequirementsPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/RequirementsPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\Compiler\\RequirementsPass.php");
    }
}
