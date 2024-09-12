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

/* @bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php */
class __TwigTemplate_95c384e71b3bf3e0cf0d275ba66a8556 extends Template
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

use libphonenumber\\NumberParseException;
use libphonenumber\\PhoneNumber;
use libphonenumber\\PhoneNumberUtil;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Phone number validator.
 */
class PhoneNumberConstraintValidator extends ConstraintValidator
{
    public function validate(\$value, Constraint \$constraint): void
    {
        if (null === \$value || '' === \$value) {
            return;
        }

        if (!is_scalar(\$value) && !(is_object(\$value) && method_exists(\$value, '__toString'))) {
            throw new UnexpectedTypeException(\$value, 'string');
        }

        \$phoneUtil = PhoneNumberUtil::getInstance();

        if (false === \$value instanceof PhoneNumber) {
            \$value = (string) \$value;
            try {
                \$phoneNumber = \$phoneUtil->parse(\$value, PhoneNumberUtil::UNKNOWN_REGION);
            } catch (NumberParseException) {
                \$this->addViolation(\$value, \$constraint);

                return;
            }
        }

        if (false === \$phoneUtil->isValidNumber(\$phoneNumber)) {
            \$this->addViolation(\$value, \$constraint);

            return;
        }
    }

    /**
     * Add a violation.
     *
     * @param mixed      \$value      the value that should be validated
     * @param Constraint \$constraint the constraint for the validation
     */
    private function addViolation(\$value, Constraint \$constraint): void
    {
        \$this->context->addViolation(
            \$constraint->getMessage(),
            ['";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "' => \$value]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php";
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
        return array (  95 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/FormBundle/Validator/Constraint/PhoneNumberConstraintValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Validator\\Constraint\\PhoneNumberConstraintValidator.php");
    }
}
