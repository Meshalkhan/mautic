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

/* @bundles/MessengerBundle/Exceptions/InvalidPayloadException.php */
class __TwigTemplate_1077d8d8a6bc3a9abb87d91cb9e93e6a extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Exceptions/InvalidPayloadException.php";
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
        return new Source("", "@bundles/MessengerBundle/Exceptions/InvalidPayloadException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Exceptions\\InvalidPayloadException.php");
    }
}
