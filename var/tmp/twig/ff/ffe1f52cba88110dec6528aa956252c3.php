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

/* @bundles/FormBundle/Validator/Constraint/PhoneNumberConstraint.php */
class __TwigTemplate_00ecad828dfdaddafdd45ee93fcaca86 extends Template
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

/**
 * Phone number constraint.
 */
class PhoneNumberConstraint extends Constraint
{
    public \$message;

    public function getMessage()
    {
        if (null !== \$this->message) {
            return \$this->message;
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
        return "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraint.php";
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
        return new Source("", "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraint.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Validator\\Constraint\\PhoneNumberConstraint.php");
    }
}
