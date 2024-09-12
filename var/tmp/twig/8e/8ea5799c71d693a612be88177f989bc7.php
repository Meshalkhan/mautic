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

/* @bundles/CoreBundle/Helper/TrailingSlashHelper.php */
class __TwigTemplate_137c19a1eeb7c971d8492bb2280f7bbc extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Request;

class TrailingSlashHelper
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function getSafeRedirectUrl(Request \$request): string
    {
        \$siteUrl  = \$this->coreParametersHelper->get('site_url');
        \$pathInfo = substr(\$request->getPathInfo(), 0, -1);

        return rtrim(\$siteUrl, '/').'/'.ltrim(\$pathInfo, '/');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/TrailingSlashHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/TrailingSlashHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\TrailingSlashHelper.php");
    }
}
