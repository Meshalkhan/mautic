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

/* @bundles/PointBundle/Helper/EventHelper.php */
class __TwigTemplate_2b12c84ccce2f5d76074554a32ad1ce3 extends Template
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

namespace Mautic\\PointBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\Lead;

class EventHelper
{
    /**
     * @param Lead  \$lead
     * @param array \$action
     *
     * @return int
     */
    public static function engagePointAction(\$lead, \$action)
    {
        static \$initiated = [];

        \$pointsChange = 0;

        // only initiate once per lead per type
        if (empty(\$initiated[\$lead->getId()][\$action['type']])) {
            if (!empty(\$action['properties']['delta'])) {
                \$pointsChange = \$action['properties']['delta'];
            }
        }

        return \$pointsChange;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/Helper/EventHelper.php";
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
        return new Source("", "@bundles/PointBundle/Helper/EventHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Helper\\EventHelper.php");
    }
}
