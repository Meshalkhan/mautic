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

/* @bundles/MessengerBundle/Validator/DsnValidator.php */
class __TwigTemplate_aa405ab69115073ef42f765c99e75c6d extends Template
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

namespace Mautic\\MessengerBundle\\Validator;

use Mautic\\CoreBundle\\Helper\\Dsn\\Dsn as CoreDsn;
use Mautic\\MessengerBundle\\Validator\\Dsn as DsnConstraint;
use Symfony\\Component\\Messenger\\Transport\\TransportFactory;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class DsnValidator extends ConstraintValidator
{
    public function __construct(
        private TransportFactory \$transportFactory
    ) {
    }

    public function validate(\$value, Constraint \$constraint): void
    {
        if (!is_string(\$value)) {
            throw new UnexpectedTypeException(\$value, 'string');
        }

        if (!\$constraint instanceof DsnConstraint) {
            throw new UnexpectedTypeException(\$constraint, DsnConstraint::class);
        }

        if (!\$value) {
            return;
        }

        try {
            \$dsn = CoreDsn::fromString(\$value);
        } catch (\\InvalidArgumentException) {
            \$this->context->addViolation('mautic.messenger.dsn.invalid_dsn');

            return;
        }

        if (!\$this->transportFactory->supports(\$value, \$dsn->getOptions())) {
            \$this->context->addViolation('mautic.messenger.dsn.unsupported_scheme');
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
        return "@bundles/MessengerBundle/Validator/DsnValidator.php";
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
        return new Source("", "@bundles/MessengerBundle/Validator/DsnValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Validator\\DsnValidator.php");
    }
}
