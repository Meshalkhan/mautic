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

/* @bundles/MessengerBundle/Exceptions/InvalidPayloadException.php */
class __TwigTemplate_165d462009335feba9280d2d19144c40 extends Template
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

declare(strict_types=1);

namespace Mautic\\MessengerBundle\\Exceptions;

use Symfony\\Component\\Messenger\\Exception\\UnrecoverableExceptionInterface;

class InvalidPayloadException extends MauticMessengerException implements UnrecoverableExceptionInterface
{
    /**
     * @param array<mixed> \$payload
     */
    public function __construct(string \$message = '', array \$payload = [], \\Throwable \$previous = null)
    {
        \$message .= json_encode(\$payload);
        parent::__construct(\$message, 400, \$previous);
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
        return "@bundles/MessengerBundle/Exceptions/InvalidPayloadException.php";
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
        return new Source("", "@bundles/MessengerBundle/Exceptions/InvalidPayloadException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Exceptions\\InvalidPayloadException.php");
    }
}
