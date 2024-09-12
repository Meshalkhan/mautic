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

/* @bundles/MessengerBundle/Transport/NullTransportFactory.php */
class __TwigTemplate_1b8a8d8d6f24f0253fd9712926c15563 extends Template
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

use Symfony\\Component\\Messenger\\Transport\\Serialization\\SerializerInterface;
use Symfony\\Component\\Messenger\\Transport\\TransportFactoryInterface;
use Symfony\\Component\\Messenger\\Transport\\TransportInterface;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class NullTransportFactory implements TransportFactoryInterface
{
    /**
     * @param mixed[] \$options
     */
    public function createTransport(string \$dsn, array \$options, SerializerInterface \$serializer): TransportInterface
    {
        return new NullTransport();
    }

    /**
     * @param mixed[] \$options
     */
    public function supports(string \$dsn, array \$options): bool
    {
        return str_starts_with(\$dsn, 'null://');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Transport/NullTransportFactory.php";
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
        return new Source("", "@bundles/MessengerBundle/Transport/NullTransportFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Transport\\NullTransportFactory.php");
    }
}
