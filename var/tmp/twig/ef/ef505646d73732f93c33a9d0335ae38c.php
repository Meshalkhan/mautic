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

/* @bundles/CacheBundle/Cache/CacheProviderInterface.php */
class __TwigTemplate_8fb3fe1e01148e93391ee9c44fe2fcad extends Template
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

namespace Mautic\\CacheBundle\\Cache;

use Symfony\\Component\\Cache\\Adapter\\TagAwareAdapterInterface;
use Symfony\\Component\\Cache\\Psr16Cache;

interface CacheProviderInterface extends TagAwareAdapterInterface
{
    /**
     * @return Psr16Cache
     */
    public function getSimpleCache();
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CacheBundle/Cache/CacheProviderInterface.php";
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
        return new Source("", "@bundles/CacheBundle/Cache/CacheProviderInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CacheBundle\\Cache\\CacheProviderInterface.php");
    }
}
