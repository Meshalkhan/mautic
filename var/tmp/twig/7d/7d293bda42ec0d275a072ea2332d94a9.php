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

/* @bundles/ReportBundle/Model/ExcelExporter.php */
class __TwigTemplate_8eb7000c4c584bab78c66cd1b59cfc18 extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use PhpOffice\\PhpSpreadsheet\\Exception;
use PhpOffice\\PhpSpreadsheet\\IOFactory;
use PhpOffice\\PhpSpreadsheet\\Spreadsheet;
use PhpOffice\\PhpSpreadsheet\\Worksheet\\Worksheet;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ExcelExporter
{
    public function __construct(
        protected FormatterHelper \$formatterHelper,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @param string \$name
     *
     * @throws \\Exception
     */
    public function export(ReportDataResult \$reportDataResult, \$name, string \$output = 'php://output'): void
    {
        if (!class_exists(Spreadsheet::class)) {
            throw new \\Exception('PHPSpreadsheet is required to export to Excel spreadsheets');
        }

        try {
            \$objPHPExcel = new Spreadsheet();
            \$objPHPExcel->getProperties()->setTitle(\$name);
            \$objPHPExcel->createSheet();
            \$objPHPExcelSheet = \$objPHPExcel->getActiveSheet();
            \$reportData       = \$reportDataResult->getData();
            \$rowCount         = 1;

            if (empty(\$reportData)) {
                throw new \\Exception('No report data to be exported');
            }

            \$headersRow = \$reportDataResult->getHeaders();
            \$this->putHeader(\$headersRow, \$objPHPExcelSheet);

            // build the data rows
            foreach (\$reportData as \$count=>\$data) {
                \$row = [];
                foreach (\$data as \$k => \$v) {
                    \$type      = \$reportDataResult->getType(\$k);
                    \$formatted = htmlspecialchars_decode(\$this->formatterHelper->_(\$v, \$type, true), ENT_QUOTES);
                    \$row[]     = \$formatted;
                }

                // write the row
                \$rowCount = \$count + 2;
                \$objPHPExcel->getActiveSheet()->fromArray(\$row, null, \"A{\$rowCount}\");
                // free memory
                unset(\$row, \$reportData['data'][\$count]);
            }

            // Add totals to export
            \$totalsRow = \$reportDataResult->getTotalsToExport(\$this->formatterHelper);
            if (!empty(\$totalsRow)) {
                \$this->putTotals(\$totalsRow, \$objPHPExcelSheet, 'A'.++\$rowCount);
            }

            \$objWriter = IOFactory::createWriter(\$objPHPExcel, 'Xlsx');
            \$objWriter->setPreCalculateFormulas(false);

            \$objWriter->save(\$output);
        } catch (Exception \$e) {
            throw new \\Exception('PHPSpreadsheet Error', 0, \$e);
        }
    }

    /**
     * @param array<string> \$headers
     */
    public function putHeader(array \$headers, Worksheet \$activeSheet): void
    {
        \$activeSheet->fromArray(\$headers);
    }

    /**
     * @param array<string> \$totals
     */
    public function putTotals(array \$totals, Worksheet \$activeSheet, string \$startCell): void
    {
        // Put label if the first item is empty
        \$key = array_key_first(\$totals);

        if (empty(\$totals[\$key])) {
            \$totals[\$key] = \$this->translator->trans('mautic.report.report.groupby.totals');
        }

        \$activeSheet->fromArray(\$totals, null, \$startCell);
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
        return "@bundles/ReportBundle/Model/ExcelExporter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ExcelExporter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Model\\ExcelExporter.php");
    }
}
