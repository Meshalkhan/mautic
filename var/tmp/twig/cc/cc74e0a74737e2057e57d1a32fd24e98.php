<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/LeadBundle/Validator/Constraints/LengthValidator.php */
class __TwigTemplate_a39206fefc653e225fd0855cb06b4108 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Validator/Constraints/LengthValidator.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/LeadBundle/Validator/Constraints/LengthValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Validator\\Constraints\\LengthValidator.php");
    }
}
