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

/* @bundles/CacheBundle/Cache/CacheProviderInterface.php */
class __TwigTemplate_7a57973136d8a497e741b503503535e8 extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CacheBundle/Cache/CacheProviderInterface.php";
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
        return new Source("", "@bundles/CacheBundle/Cache/CacheProviderInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CacheBundle\\Cache\\CacheProviderInterface.php");
    }
}
