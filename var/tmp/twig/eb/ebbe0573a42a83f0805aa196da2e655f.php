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

/* @bundles/ReportBundle/Model/CsvExporter.php */
class __TwigTemplate_52a4162a825dcad9d899622fdd969547 extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CsvExporter
{
    public function __construct(
        protected FormatterHelper \$formatterHelper,
        private CoreParametersHelper \$coreParametersHelper,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @param resource \$handle
     * @param int      \$page
     */
    public function export(ReportDataResult \$reportDataResult, \$handle, \$page = 1): void
    {
        if (1 === \$page) {
            \$this->putHeader(\$reportDataResult, \$handle);
        }

        foreach (\$reportDataResult->getData() as \$data) {
            \$row = [];
            foreach (\$data as \$k => \$v) {
                \$type       = \$reportDataResult->getType(\$k);
                \$typeString = 'string' !== \$type;
                \$row[]      = \$typeString ? \$this->formatterHelper->_(\$v, \$type, true) : \$v;
            }
            \$this->putRow(\$handle, \$row);
        }

        if (\$reportDataResult->isLastPage()) {
            \$totalsRow = \$reportDataResult->getTotalsToExport(\$this->formatterHelper);

            if (!empty(\$totalsRow)) {
                \$this->putTotals(\$totalsRow, \$handle);
            }
        }
    }

    /**
     * @param resource \$handle
     */
    public function putHeader(ReportDataResult \$reportDataResult, \$handle): void
    {
        \$this->putRow(\$handle, \$reportDataResult->getHeaders());
    }

    /**
     * @param array<string> \$totals
     * @param resource      \$handle
     */
    public function putTotals(array \$totals, \$handle): void
    {
        // Put label if the first item is empty
        \$key = array_key_first(\$totals);

        if (empty(\$totals[\$key])) {
            \$totals[\$key] = \$this->translator->trans('mautic.report.report.groupby.totals');
        }

        \$this->putRow(\$handle, \$totals);
    }

    /**
     * @param resource \$handle
     */
    private function putRow(\$handle, array \$row): void
    {
        if (\$this->coreParametersHelper->get('csv_always_enclose')) {
            fputs(\$handle, '\"'.implode('\",\"', \$row).'\"'.\"\\n\");
        } else {
            fputcsv(\$handle, \$row);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/CsvExporter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/CsvExporter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Model\\CsvExporter.php");
    }
}
