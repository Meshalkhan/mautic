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

/* @bundles/CoreBundle/Helper/Chart/PieChart.php */
class __TwigTemplate_fc5e72272dc2450b8f8e48707f782d09 extends Template
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

class PieChart extends AbstractChart implements ChartInterface
{
    /**
     * Holds the suma of the all dataset values.
     *
     * @var float
     */
    protected \$totalCount = 0;

    /**
     * @return array{labels: mixed[], datasets: mixed[]}
     */
    public function render(\$withCounts = true): array
    {
        \$data = ['data' => [], 'backgroundColor' => [], 'hoverBackgroundColor' => []];

        foreach (\$this->datasets as \$datasetId => \$value) {
            \$color                          = \$this->configureColorHelper(\$datasetId);
            \$data['data'][]                 = \$value;
            \$data['backgroundColor'][]      = \$color->toRgba(0.8);
            \$data['hoverBackgroundColor'][] = \$color->toRgba(0.9);
            if (\$withCounts) {
                \$this->labels[\$datasetId] = \$this->buildFullLabel(\$this->labels[\$datasetId], \$value);
            }
        }

        return [
            'labels'   => \$this->labels,
            'datasets' => [\$data],
        ];
    }

    /**
     * Define a dataset by name and count number. Method will add the rest.
     *
     * @param string \$label
     * @param int    \$value
     *
     * @return \$this
     */
    public function setDataset(\$label, \$value)
    {
        \$this->totalCount += \$value;
        \$this->datasets[] = \$value;
        \$this->labels[]   = \$label;

        return \$this;
    }

    /**
     * Adds to the label also the value and the percentage.
     *
     * @param string \$label
     * @param int    \$value
     *
     * @return string
     */
    public function buildFullLabel(\$label, \$value)
    {
        if (!\$this->totalCount) {
            return \$label;
        }
        \$percentage = round(\$value / \$this->totalCount * 100, 2);

        return \$label.'; '.\$value.'x, '.\$percentage.'%';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Chart/PieChart.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Chart/PieChart.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Chart\\PieChart.php");
    }
}
