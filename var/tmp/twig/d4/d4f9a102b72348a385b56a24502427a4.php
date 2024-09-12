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

/* @bundles/EmailBundle/Mailer/Transport/TransportFactory.php */
class __TwigTemplate_554e2f11baa3998cd76f47568e610dc8 extends Template
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

use Symfony\\Component\\Mailer\\Exception\\UnsupportedSchemeException;
use Symfony\\Component\\Mailer\\Transport as SymfonyTransportFactory;
use Symfony\\Component\\Mailer\\Transport\\Dsn;
use Symfony\\Component\\Mailer\\Transport\\TransportInterface;
use Symfony\\Component\\Mailer\\Transport\\Transports;

class TransportFactory
{
    public function __construct(
        private SymfonyTransportFactory \$transportFactory
    ) {
    }

    /**
     * @param array<string, string> \$dsns
     */
    public function fromStrings(array \$dsns): Transports
    {
        \$transports = [];

        foreach (\$dsns as \$name => \$dsn) {
            \$transports[\$name] = \$this->fromString(\$dsn);
        }

        return new Transports(\$transports);
    }

    public function fromString(string \$dsn): TransportInterface
    {
        try {
            return \$this->transportFactory->fromString(\$dsn);
        } catch (UnsupportedSchemeException) {
            return new InvalidTransport();
        }
    }

    public function fromDsnObject(Dsn \$dsn): TransportInterface
    {
        return \$this->transportFactory->fromDsnObject(\$dsn);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Mailer/Transport/TransportFactory.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/TransportFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Mailer\\Transport\\TransportFactory.php");
    }
}
