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

/* @bundles/MessengerBundle/Transport/NullTransport.php */
class __TwigTemplate_bb6c9d536829fbf9e3f5618673b94746 extends Template
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

namespace Mautic\\MessengerBundle\\Transport;

use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Transport\\TransportInterface;

class NullTransport implements TransportInterface
{
    public function get(): iterable
    {
        return [];
    }

    public function ack(Envelope \$envelope): void
    {
    }

    public function reject(Envelope \$envelope): void
    {
    }

    public function send(Envelope \$envelope): Envelope
    {
        return \$envelope;
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
        return "@bundles/MessengerBundle/Transport/NullTransport.php";
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
        return new Source("", "@bundles/MessengerBundle/Transport/NullTransport.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Transport\\NullTransport.php");
    }
}
