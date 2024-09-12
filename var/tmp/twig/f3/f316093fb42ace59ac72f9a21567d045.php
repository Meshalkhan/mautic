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

/* @bundles/FormBundle/Validator/Constraint/FileExtensionConstraint.php */
class __TwigTemplate_eba2abbaa9241e6ea974e2e1f79045da extends Template
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

namespace Mautic\\FormBundle\\Validator\\Constraint;

use Symfony\\Component\\Validator\\Constraint;

class FileExtensionConstraint extends Constraint
{
    public \$message = 'File extension contains an illegal extension: \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["forbidden"]) || array_key_exists("forbidden", $context) ? $context["forbidden"] : (function () { throw new RuntimeError('Variable "forbidden" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\".';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraint.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/FormBundle/Validator/Constraint/FileExtensionConstraint.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Validator\\Constraint\\FileExtensionConstraint.php");
    }
}
