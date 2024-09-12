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

/* @bundles/CoreBundle/Helper/Chart/DateRangeUnitTrait.php */
class __TwigTemplate_74e7e028b4cabdc8e983f23e85f5a074 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Chart;

trait DateRangeUnitTrait
{
    /**
     * Returns appropriate time unit from a date range so the line/bar charts won't be too full/empty.
     */
    public function getTimeUnitFromDateRange(\\DateTimeInterface \$dateFrom, \\DateTimeInterface \$dateTo): string
    {
        \$dayDiff = \$dateTo->diff(\$dateFrom)->format('%a');
        \$unit    = 'd';

        if (\$dayDiff <= 1) {
            \$unit = 'H';

            \$sameDay    = \$dateTo->format('d') === \$dateFrom->format('d');
            \$hourDiff   = \$dateTo->diff(\$dateFrom)->format('%h');
            \$minuteDiff = \$dateTo->diff(\$dateFrom)->format('%i');
            if (\$sameDay && !intval(\$hourDiff) && intval(\$minuteDiff)) {
                \$unit = 'i';
            }
            \$secondDiff = \$dateTo->diff(\$dateFrom)->format('%s');
            if (!intval(\$minuteDiff) && intval(\$secondDiff)) {
                \$unit = 'i';
            }
        }
        if (\$dayDiff > 31) {
            \$unit = 'W';
        }
        if (\$dayDiff > 100) {
            \$unit = 'm';
        }
        if (\$dayDiff > 1000) {
            \$unit = 'Y';
        }

        return \$unit;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Chart/DateRangeUnitTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Chart/DateRangeUnitTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Chart\\DateRangeUnitTrait.php");
    }
}
