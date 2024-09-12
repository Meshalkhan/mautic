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

/* @bundles/EmailBundle/Event/TransportWebhookEvent.php */
class __TwigTemplate_d9f75f5e07bc49278e45484144ed5adc extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * Event triggered when a transport service send Mautic a webhook request.
 */
final class TransportWebhookEvent extends Event
{
    private ?Response \$response = null;

    public function __construct(
        private Request \$request
    ) {
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getResponse(): ?Response
    {
        return \$this->response;
    }

    public function setResponse(Response \$response): void
    {
        \$this->response = \$response;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/TransportWebhookEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/TransportWebhookEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Event\\TransportWebhookEvent.php");
    }
}
