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

/* @bundles/CacheBundle/Exceptions/InvalidArgumentException.php */
class __TwigTemplate_155f83c2fcf1a3f72fe44a91ef9910c1 extends Template
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

namespace Mautic\\CacheBundle\\Exceptions;

class InvalidArgumentException extends \\Symfony\\Component\\Cache\\Exception\\InvalidArgumentException
{
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CacheBundle/Exceptions/InvalidArgumentException.php";
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
        return new Source("", "@bundles/CacheBundle/Exceptions/InvalidArgumentException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CacheBundle\\Exceptions\\InvalidArgumentException.php");
    }
}
