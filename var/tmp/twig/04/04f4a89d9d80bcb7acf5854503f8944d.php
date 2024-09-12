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

/* @bundles/LeadBundle/Form/Validator/Constraints/EmailAddressValidator.php */
class __TwigTemplate_f00ab497c6c6f716e8bda410945cddbe extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class EmailAddressValidator extends ConstraintValidator
{
    public function __construct(
        private EmailValidator \$emailValidator
    ) {
    }

    /**
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!empty(\$value)) {
            try {
                \$this->emailValidator->validate(\$value);
            } catch (InvalidEmailException \$invalidEmailException) {
                \$this->context->addViolation(
                    \$invalidEmailException->getMessage()
                );
            }
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/EmailAddressValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/EmailAddressValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Validator\\Constraints\\EmailAddressValidator.php");
    }
}
