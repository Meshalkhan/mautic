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

/* @bundles/CoreBundle/Helper/Chart/BarChart.php */
class __TwigTemplate_53d5ca8347741c5ebde8e7a5fcbd9f9d extends Template
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

class BarChart extends AbstractChart implements ChartInterface
{
    /**
     * Defines the basic chart values, generates the time axe labels from it.
     */
    public function __construct(array \$labels)
    {
        \$this->labels = \$labels;
    }

    /**
     * @return array{labels: mixed[], datasets: mixed[]}
     */
    public function render(): array
    {
        ksort(\$this->datasets);

        return [
            'labels'   => \$this->labels,
            'datasets' => \$this->datasets,
        ];
    }

    /**
     * Define a dataset by name and data. Method will add the rest.
     *
     * @param string \$label
     * @param int    \$order
     *
     * @return \$this
     */
    public function setDataset(\$label, array \$data, \$order = null)
    {
        \$datasetId = count(\$this->datasets);

        \$baseData = [
            'label' => \$label,
            'data'  => \$data,
        ];

        if (null === \$order) {
            \$order = count(\$this->datasets);
        }

        \$this->datasets[\$order] = array_merge(\$baseData, \$this->generateColors(\$datasetId));

        return \$this;
    }

    /**
     * Generate unique color for the dataset.
     *
     * @param int \$datasetId
     */
    public function generateColors(\$datasetId): array
    {
        \$color = \$this->configureColorHelper(\$datasetId);

        return [
            'fill'                      => true,
            'backgroundColor'           => \$color->toRgba(0.7),
            'borderColor'               => \$color->toRgba(0.8),
            'pointHoverBackgroundColor' => \$color->toRgba(0.9),
            'pointHoverBorderColor'     => \$color->toRgba(1),
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Chart/BarChart.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Chart/BarChart.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Chart\\BarChart.php");
    }
}
