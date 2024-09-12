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

/* @bundles/ReportBundle/Builder/ReportBuilderInterface.php */
class __TwigTemplate_51e776dff7d6ee48fa07d2d9ab10615c extends Template
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

namespace Mautic\\ReportBundle\\Builder;

/**
 * Interface ReportBuilderInterface.
 */
interface ReportBuilderInterface
{
    /**
     * Gets the query instance with default parameters.
     *
     * @param array \$options Options array
     *
     * @return \\Doctrine\\DBAL\\Query\\QueryBuilder
     */
    public function getQuery(array \$options);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Builder/ReportBuilderInterface.php";
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
        return new Source("", "@bundles/ReportBundle/Builder/ReportBuilderInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Builder\\ReportBuilderInterface.php");
    }
}
