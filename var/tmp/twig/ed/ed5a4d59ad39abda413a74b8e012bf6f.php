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

/* @bundles/EmailBundle/Validator/DsnValidator.php */
class __TwigTemplate_1968cee36c5a5061467bc5128b413e00 extends Template
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

namespace Mautic\\EmailBundle\\Validator;

use Mautic\\EmailBundle\\Mailer\\Transport\\TransportFactory;
use Mautic\\EmailBundle\\Validator\\Dsn as DsnConstraint;
use Symfony\\Component\\Mailer\\Exception\\ExceptionInterface;
use Symfony\\Component\\Mailer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mailer\\Exception\\UnsupportedSchemeException;
use Symfony\\Component\\Mailer\\Transport\\Dsn as MailerDsn;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

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
            \$dsn = MailerDsn::fromString(\$value);
        } catch (InvalidArgumentException \$e) {
            \$this->context->addViolation(\$e->getMessage() ?: 'mautic.email.dsn.invalid_dsn');

            return;
        }

        try {
            \$this->transportFactory->fromDsnObject(\$dsn);
        } catch (UnsupportedSchemeException \$e) {
            \$this->context->addViolation(\$e->getMessage() ?: 'mautic.email.dsn.unsupported_scheme');
        } catch (ExceptionInterface \$e) {
            \$this->context->addViolation(\$e->getMessage() ?: 'mautic.email.dsn.invalid_dsn');
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
        return "@bundles/EmailBundle/Validator/DsnValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Validator/DsnValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Validator\\DsnValidator.php");
    }
}
