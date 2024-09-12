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

/* @bundles/LeadBundle/Validator/Constraints/LengthValidator.php */
class __TwigTemplate_82600bb48b1de461f3b18d10208d5ff5 extends Template
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

namespace Mautic\\LeadBundle\\Validator\\Constraints;

use Mautic\\LeadBundle\\Helper\\FormFieldHelper;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\LengthValidator as SymfonyLengthValidator;

class LengthValidator extends SymfonyLengthValidator
{
    public function validate(\$value, Constraint \$constraint): void
    {
        if (is_array(\$value)) {
            \$value = FormFieldHelper::formatList(FormFieldHelper::FORMAT_BAR, \$value);
        }

        parent::validate(\$value, \$constraint);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Validator/Constraints/LengthValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Validator/Constraints/LengthValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Validator\\Constraints\\LengthValidator.php");
    }
}
