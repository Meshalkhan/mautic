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

/* @bundles/EmailBundle/Validator/MultipleEmailsValidValidator.php */
class __TwigTemplate_4b18c21c5319b1cfe9292b51f1869dba extends Template
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

namespace Mautic\\EmailBundle\\Validator;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class MultipleEmailsValidValidator extends ConstraintValidator
{
    public function __construct(
        private EmailValidator \$emailValidator
    ) {
    }

    /**
     * @param string \$emailsInString
     */
    public function validate(\$emailsInString, Constraint \$constraint): void
    {
        if (!\$emailsInString) {
            return;
        }

        \$transformer = new ArrayStringTransformer();
        \$emails      = \$transformer->reverseTransform(\$emailsInString);

        foreach (\$emails as \$email) {
            try {
                \$this->emailValidator->validate(\$email);
            } catch (InvalidEmailException \$e) {
                \$this->context->buildViolation('mautic.email.multiple_emails.not_valid', ['%email%' => \$e->getMessage()])
                    ->addViolation();

                return;
            }
        }
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
        return "@bundles/EmailBundle/Validator/MultipleEmailsValidValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Validator/MultipleEmailsValidValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Validator\\MultipleEmailsValidValidator.php");
    }
}
