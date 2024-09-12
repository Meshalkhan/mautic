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

/* @bundles/UserBundle/Form/Validator/Constraints/NotWeakValidator.php */
class __TwigTemplate_3bfb7ef1835030173fe2333ec611daae extends Template
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

declare(strict_types=1);

namespace Mautic\\UserBundle\\Form\\Validator\\Constraints;

use Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

final class NotWeakValidator extends ConstraintValidator
{
    public function __construct(private PasswordStrengthEstimatorModel \$passwordStrengthEstimatorModel)
    {
    }

    public function validate(\$value, Constraint \$constraint): void
    {
        if (!\$constraint instanceof NotWeak) {
            throw new UnexpectedTypeException(\$constraint, NotWeak::class);
        }

        if (\$this->passwordStrengthEstimatorModel->validate(\$value, \$constraint->score)) {
            return;
        }

        \$this->context->buildViolation(\$constraint->message)
            ->setCode(NotWeak::TOO_WEAK)
            ->addViolation();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Form/Validator/Constraints/NotWeakValidator.php";
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
        return new Source("", "@bundles/UserBundle/Form/Validator/Constraints/NotWeakValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Form\\Validator\\Constraints\\NotWeakValidator.php");
    }
}
