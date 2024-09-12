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

/* @bundles/SmsBundle/DependencyInjection/Compiler/SmsTransportPass.php */
class __TwigTemplate_b7e97bbd55ddcb6d65cc5ec75d2de678 extends Template
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

namespace Mautic\\SmsBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class SmsTransportPass implements CompilerPassInterface
{
    private ?ContainerBuilder \$container = null;

    public function process(ContainerBuilder \$container): void
    {
        \$this->container = \$container;

        \$this->registerTransports();
        \$this->registerCallbacks();
    }

    private function registerTransports(): void
    {
        if (!\$this->container->has('mautic.sms.transport_chain')) {
            return;
        }

        \$definition     = \$this->container->getDefinition('mautic.sms.transport_chain');
        \$taggedServices = \$this->container->findTaggedServiceIds('mautic.sms_transport');
        foreach (\$taggedServices as \$id => \$tags) {
            \$definition->addMethodCall('addTransport', [
                \$id,
                new Reference(\$id),
                !empty(\$tags[0]['alias']) ? \$tags[0]['alias'] : \$id,
                !empty(\$tags[0]['integrationAlias']) ? \$tags[0]['integrationAlias'] : \$id,
            ]);
        }
    }

    private function registerCallbacks(): void
    {
        if (!\$this->container->has('mautic.sms.callback_handler_container')) {
            return;
        }

        \$definition     = \$this->container->getDefinition('mautic.sms.callback_handler_container');
        \$taggedServices = \$this->container->findTaggedServiceIds('mautic.sms_callback_handler');
        foreach (\$taggedServices as \$id => \$tags) {
            \$definition->addMethodCall('registerHandler', [
                new Reference(\$id),
            ]);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/DependencyInjection/Compiler/SmsTransportPass.php";
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
        return new Source("", "@bundles/SmsBundle/DependencyInjection/Compiler/SmsTransportPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\DependencyInjection\\Compiler\\SmsTransportPass.php");
    }
}
