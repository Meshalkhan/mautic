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

/* @bundles/CoreBundle/DependencyInjection/Compiler/TestPass.php */
class __TwigTemplate_0f27a0cf2efc79b2c23e964aaf2787d4 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

final class TestPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container): void
    {
        // Stub Guzzle HTTP client to prevent accidental request to third parties
        \$definition = \$container->getDefinition('mautic.http.client');
        \$definition->setPublic(true)
            ->setFactory([\\Mautic\\CoreBundle\\Test\\Guzzle\\ClientFactory::class, 'stub'])
            ->addArgument(new Reference(\\GuzzleHttp\\Handler\\MockHandler::class));

        \$container->removeAlias(\\Symfony\\Contracts\\HttpClient\\HttpClientInterface::class);
        \$container->register(\\Symfony\\Component\\HttpClient\\MockHttpClient::class, \\Symfony\\Component\\HttpClient\\MockHttpClient::class)->setAutowired(true)->setPublic(true);
        \$container->setAlias(\\Symfony\\Contracts\\HttpClient\\HttpClientInterface::class, \\Symfony\\Component\\HttpClient\\MockHttpClient::class);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/Compiler/TestPass.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Compiler/TestPass.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\Compiler\\TestPass.php");
    }
}
