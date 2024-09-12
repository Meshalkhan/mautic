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

/* @bundles/CoreBundle/Helper/PhpVersionHelper.php */
class __TwigTemplate_e363bef6f22031a2505375c984a5134a extends Template
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

namespace Mautic\\CoreBundle\\Helper;

/**
 * Provides functions to get the PHP version number.
 */
class PhpVersionHelper
{
    /**
     * For example, if the PHP version is 7.2.34-9+0\\~20210112.53+debian10\\~1.gbpfdd1e6,
     * this function will return 7.2.34. This is the semver MAJOR.MINOR.PATCH format.
     */
    public static function getCurrentSemver(): string
    {
        return PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION.'.'.PHP_RELEASE_VERSION;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/PhpVersionHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PhpVersionHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\PhpVersionHelper.php");
    }
}
