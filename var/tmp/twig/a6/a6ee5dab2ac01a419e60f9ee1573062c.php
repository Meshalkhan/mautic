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

/* @bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php */
class __TwigTemplate_152606e74b8f6347fdd4f5f9ae1ed695 extends Template
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

use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

class LeadListAccessValidator extends ConstraintValidator
{
    public function __construct(
        private ListModel \$segmentModel
    ) {
    }

    /**
     * @param mixed \$value
     */
    public function validate(\$value, Constraint \$constraint): void
    {
        if (!\$constraint instanceof LeadListAccess) {
            throw new UnexpectedTypeException(\$constraint, LeadListAccess::class);
        }

        if (count(\$value)) {
            \$lists = \$this->segmentModel->getUserLists();
            foreach (\$value as \$l) {
                if (!isset(\$lists[\$l->getId()])) {
                    \$this->context->addViolation(
                        \$constraint->message,
                        ['%string%' => \$l->getName()]
                    );
                    break;
                }
            }
        } elseif (!\$constraint->allowEmpty) {
            \$this->context->addViolation(\$constraint->message);
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/LeadListAccessValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Validator\\Constraints\\LeadListAccessValidator.php");
    }
}
