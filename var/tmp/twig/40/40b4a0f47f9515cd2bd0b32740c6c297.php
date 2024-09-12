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

/* @bundles/LeadBundle/Event/ImportInitEvent.php */
class __TwigTemplate_fc23dbc9f6330b1763312e30171632fa extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;

final class ImportInitEvent extends CommonEvent
{
    public bool \$objectSupported   = false;

    public ?string \$objectSingular = null;

    public ?string \$objectName     = null; // Object name for humans. Will go through translator.

    public ?string \$activeLink     = null;

    public ?string \$indexRoute     = null;

    public array \$indexRouteParams = [];

    public function __construct(
        public string \$routeObjectName
    ) {
    }

    public function setIndexRoute(?string \$indexRoute, array \$routeParams = []): void
    {
        \$this->indexRoute       = \$indexRoute;
        \$this->indexRouteParams = \$routeParams;
    }

    /**
     * Check if the import is for said route object and notes if the object exist.
     */
    public function importIsForRouteObject(string \$routeObject): bool
    {
        if (\$this->routeObjectName === \$routeObject) {
            \$this->objectSupported = true;

            return true;
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ImportInitEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ImportInitEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\ImportInitEvent.php");
    }
}
