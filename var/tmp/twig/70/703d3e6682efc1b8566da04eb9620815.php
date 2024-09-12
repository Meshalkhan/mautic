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

/* @bundles/EmailBundle/Translations/en_US/validators.ini */
class __TwigTemplate_8d0f004b758b0dfc130f1f69c77fb9e2 extends Template
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
        yield "mautic.email.chooseemail.notblank=\"Select the email to be sent.\"
mautic.email.list.noaccess=\"No list was selected or you do not have access to one that was.\"
mautic.email.subject.notblank=\"A subject is required.\"
mautic.email.variant.weight.notblank=\"Enter the percentage of recipients to receive this email.\"
mautic.email.api_key_required=\"API key is required.\"
mautic.email.multiple_emails.not_valid=\"Provided emails are not valid: %email%\"
mautic.email.email_or_token.not_valid=\"Provided value '%value%' is not an email address nor a token build on a email field type. %details%\"
mautic.email.dsn.invalid_dsn=\"Invalid DSN. Please make sure you entered all the needed fields.\"
mautic.email.dsn.unsupported_scheme=\"Unsupported scheme.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/EmailBundle/Translations/en_US/validators.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Translations\\en_US\\validators.ini");
    }
}
