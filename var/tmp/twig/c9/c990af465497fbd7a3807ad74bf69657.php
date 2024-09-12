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

/* @bundles/CoreBundle/Helper/Chart/LineChart.php */
class __TwigTemplate_6aeaef95cc4c6baf0fa486988ac6341e extends Template
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

/**
 * Line chart requires the same data as Bar chart.
 */
class LineChart extends AbstractChart implements ChartInterface
{
    /**
     * Match date/time unit to a humanly readable label
     * {@link php.net/manual/en/function.date.php#refsect1-function.date-parameters}.
     *
     * @var array
     */
    protected \$labelFormats = [
        's' => 'H:i:s',
        'i' => 'H:i',
        'H' => 'M j ga',
        'd' => 'M j, y',
        'D' => 'M j, y', // ('D' is BC. Can be removed when all charts use this class)
        'W' => '\\W\\e\\e\\k W', // (Week is escaped here so it's not interpreted when creating labels)
        'm' => 'M Y',
        'M' => 'M Y', // ('M' is BC. Can be removed when all charts use this class)
        'Y' => 'Y',
    ];

    /**
     * Defines the basic chart values, generates the time axe labels from it.
     *
     * @param string|null \$unit       {@link php.net/manual/en/function.date.php#refsect1-function.date-parameters}
     * @param \\DateTime   \$dateFrom
     * @param \\DateTime   \$dateTo
     * @param string      \$dateFormat
     */
    public function __construct(
        ?string \$unit = null,
        \$dateFrom = null,
        \$dateTo = null,
        protected \$dateFormat = null
    ) {
        \$this->unit       = \$unit ?? \$this->getTimeUnitFromDateRange(\$dateFrom, \$dateTo);
        \$this->isTimeUnit = in_array(\$this->unit, ['H', 'i', 's']);
        \$this->setDateRange(\$dateFrom, \$dateTo);
        \$this->amount     = \$this->countAmountFromDateRange();
        \$this->generateTimeLabels(\$this->amount);
        \$this->addOneUnitMinusOneSec(\$this->dateTo);
    }

    /**
     * @return array{labels: mixed[], datasets: mixed[]}
     */
    public function render(): array
    {
        return [
            'labels'   => \$this->labels,
            'datasets' => \$this->datasets,
        ];
    }

    /**
     * Define a dataset by name and data. Method will add the rest.
     *
     * @param string \$label
     *
     * @return \$this
     */
    public function setDataset(\$label, array \$data)
    {
        \$datasetId = count(\$this->datasets);

        \$baseData = [
            'label' => \$label,
            'data'  => \$data,
        ];

        \$this->datasets[] = array_merge(\$baseData, \$this->generateColors(\$datasetId));

        return \$this;
    }

    /**
     * Generate array of labels from the form data.
     *
     * @param int \$amount
     */
    public function generateTimeLabels(\$amount): void
    {
        if (!isset(\$this->labelFormats[\$this->unit])) {
            throw new \\UnexpectedValueException('Date/Time unit \"'.\$this->unit.'\" is not available for a label.');
        }

        /** @var \\DateTime \$date */
        \$date    = clone \$this->dateFrom;
        \$oneUnit = \$this->getUnitInterval();
        \$format  = !empty(\$this->dateFormat) ? \$this->dateFormat : \$this->labelFormats[\$this->unit];

        for (\$i = 0; \$i < \$amount; ++\$i) {
            \$this->labels[] = \$date->format(\$format);

            // Special case for months because PHP behaves weird with February
            if ('m' === \$this->unit) {
                \$date->modify('first day of next month');
            } else {
                \$date->add(\$oneUnit);
            }
        }
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
            'backgroundColor'           => \$color->toRgba(0.1),
            'borderColor'               => \$color->toRgba(0.8),
            'pointHoverBackgroundColor' => \$color->toRgba(1),
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
        return "@bundles/CoreBundle/Helper/Chart/LineChart.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Chart/LineChart.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Chart\\LineChart.php");
    }
}
