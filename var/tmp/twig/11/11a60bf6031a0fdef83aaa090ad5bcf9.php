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

/* @bundles/MessengerBundle/Transport/NullTransport.php */
class __TwigTemplate_509b1b9a07cb905770bcc5bbdf68abe0 extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Transport/NullTransport.php";
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
        return new Source("", "@bundles/MessengerBundle/Transport/NullTransport.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Transport\\NullTransport.php");
    }
}
