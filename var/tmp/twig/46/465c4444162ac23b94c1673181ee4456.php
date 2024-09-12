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

/* @bundles/EmailBundle/Mailer/Transport/InvalidTransport.php */
class __TwigTemplate_5478876877b90af66df7733fff926ec9 extends Template
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

namespace Mautic\\EmailBundle\\Mailer\\Transport;

use Symfony\\Component\\Mailer\\Envelope;
use Symfony\\Component\\Mailer\\Exception\\TransportException;
use Symfony\\Component\\Mailer\\SentMessage;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Component\\Mime\\RawMessage;

class InvalidTransport implements TransportInterface
{
    public function send(RawMessage \$message, Envelope \$envelope = null): ?SentMessage
    {
        throw new TransportException('Unknown DSN scheme. Please make sure the mailer DSN is configured properly.');
    }

    public function __toString(): string
    {
        return 'invalid://';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Mailer/Transport/InvalidTransport.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/InvalidTransport.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Mailer\\Transport\\InvalidTransport.php");
    }
}
