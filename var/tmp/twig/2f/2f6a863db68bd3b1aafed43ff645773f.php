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

/* @bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php */
class __TwigTemplate_0d33dcd9b585d5b32a609de6218b6d71 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Stat;

use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Segment\\Stat\\ChartQuery\\SegmentContactsLineChartQuery;

class SegmentChartQueryFactory
{
    public function getContactsTotal(SegmentContactsLineChartQuery \$query, ListModel \$listModel): array
    {
        \$total = \$listModel->getRepository()->getLeadCount(\$query->getSegmentId());

        return \$query->getTotalStats(\$total);
    }

    public function getContactsAdded(SegmentContactsLineChartQuery \$query): array
    {
        return \$query->getAddedEventLogStats();
    }

    /**
     * @return array
     */
    public function getContactsRemoved(SegmentContactsLineChartQuery \$query)
    {
        return \$query->getRemovedEventLogStats();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Stat\\SegmentChartQueryFactory.php");
    }
}
